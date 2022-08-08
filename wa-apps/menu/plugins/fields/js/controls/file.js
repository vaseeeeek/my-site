(function ($) {
	window.menuFieldsFile = function($file) {
		if ($file.data('is-inited')) {
			return;
		}

		var uploaded_class = $file.data('uploaded-class');

		function isUploaded() {
			return $file.hasClass(uploaded_class);
		}

		function setUploaded(is_uploaded) {
			$file.toggleClass(uploaded_class, is_uploaded);
			$file.find('.j-mf-control-file-upload-box-input').val('');
		}

		function saveUploaded(uploaded_url) {
			$file.find('.j-mf-control-file-value').val(uploaded_url);
			$file.find('.j-mf-control-file-link').attr('href', uploaded_url);
			setUploaded(true);
		}

		function removeUploaded() {
			$file.find('.j-mf-control-file-value').val('');
			$file.find('.j-mf-control-file-link').attr('href', '');
			setUploaded(false);
		}

		$file.find('.j-mf-control-file-upload-box-link').on('click', function (e) {
			var $input = $file.find('.j-mf-control-file-upload-box-input');
			if (!$input[0].files || !$input[0].files[0]) {
				alert('Пожалуйста, выберите файл для загрузки');
				e.preventDefault();
				return;
			}

			var form = new FormData();
			form.append('file', $input[0].files[0]);

			$.ajax({
				url: '?plugin=fields&module=fileControl&action=upload',
				data: form,
				processData: false,
				contentType: false,
				type: 'POST',
				success: function (response) {
					if (!response || !response.status) {
						alert('Не удалось загрузить файл');
					} else if (response) {
						if (response.status === 'fail') {
							alert(response.errors[0]);
						} else if (response.status === 'ok') {
							saveUploaded(response.data);
						}
					}
				}
			});

			e.preventDefault();
		});

		$file.find('.j-mf-control-file-remove-link').on('click', function (e) {
			if (!confirm('Вы уверены?')) {
				e.preventDefault();
				return;
			}

			$.post('?plugin=fields&module=fileControl&action=remove', {
				url: $file.find('.j-mf-control-file-value').val()
			}, function (response) {
				if (!response || !response.status) {
					alert('Не удалось удалить файл');
				} else if (response) {
					if (response.status === 'fail') {
						alert(response.errors[0]);
					} else if (response.status === 'ok') {
						removeUploaded();
					}
				}
			}, 'json');

			e.preventDefault();
		});

		$file.data('is-inited', true);
	}
})(jQuery);
