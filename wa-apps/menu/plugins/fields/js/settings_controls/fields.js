(function ($) {
	function verifyVisibility() {
		var has_fields = $('.j-mf-fields-field:not(.j-mf-fields-field-template)').length > 0;

		if (has_fields) {
			$('.j-mf-fields-fields').show();
			$('.j-mf-fields-empty-message').hide();
		} else {
			$('.j-mf-fields-fields').hide();
			$('.j-mf-fields-empty-message').show();
		}
	}

	function getLastFieldId() {
		var id = -1;

		$('.j-mf-fields-field').each(function () {
			if ($(this).hasClass('j-mf-fields-field-template')) {
				return;
			}

			var current_id = +$(this).data('id');
			if (current_id > id) {
				id = current_id;
			}
		});

		return id;
	}

	function create$Field(id) {
		var $template = $('.j-mf-fields-field-template');
		var $field = $template.clone().removeClass('j-mf-fields-field-template').css({ display: 'flex' });
		$field.attr('data-id', id);
		$field.find('.j-mf-fields-field-id-value').html(id);
		$field.find('.j-mf-fields-field-numeric').html(id + 1);

		$field.find('input, select').each(function () {
			var name = $(this).attr('name');
			name = name.replace('___ID___', id);
			name = name.replace('demo_', '');

			$(this).attr('name', name);
		});

		return $field;
	}

	function createClickHandler() {
		var $field = create$Field(getLastFieldId() + 1);
		$field.appendTo($('.j-mf-fields-fields'));
		verifyVisibility();
	}

	function deleteClickHandler() {
		var $field = $(this).closest('.j-mf-fields-field');
		$field.remove();
		verifyVisibility();
	}

	function keyChangeHandler(e) {
		var value = $(this).val().replace(/([^a-z0-9\-_]+)/, '');
		$(this).val(value.replace(/([^a-z0-9\-_]+)/, ''));
		var $field = $(this).closest('.j-mf-fields-field');
		$field.find('.j-mf-fields-field-key')[!!value ? 'show' : 'hide']().find('.j-mf-fields-field-key-value').html(value);
		$field.find('.j-mf-fields-field-id')[!!value ? 'hide' : 'show']();
	}

	$('.j-mf-fields-create').on('click', createClickHandler);
	$(document).off('click', '.j-mf-fields-field-delete').on('click', '.j-mf-fields-field-delete', deleteClickHandler);
	$(document).off('input paste', '.j-mf-fields-field-key-input').on('input paste', '.j-mf-fields-field-key-input', keyChangeHandler)
})(jQuery);
