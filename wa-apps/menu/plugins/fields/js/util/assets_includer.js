if (!window.fields_assets_includer) {
	(function () {
		var loader = {
			loading_assets: [],
			loaded_assets: [],
			subscribers: {},
		};

		var prior = document.querySelector('head');

		function getAssetId (asset, type) {
			return asset + '.' + type;
		}

		function includeJs (asset, callback) {
			var script = document.createElement('script');
			script.async = true;
			script.defer = true;

			function resolve (e, isAbort) {
				if (isAbort || !script.readyState || /loaded|complete/.test(script.readyState)) {
					script.onload = null;
					script.onreadystatechange = null;
					script = undefined;

					if (!isAbort) {
						if (typeof callback === 'function') {
							callback();
						}
					}
				}
			}

			script.onload = resolve;
			script.onreadystatechange = resolve;

			script.src = asset;
			prior.insertAdjacentElement('beforeend', script);
		}

		function includeCss (asset, callback) {
			var link = document.createElement('link');
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = asset;

			function resolve () {
				if (typeof callback === 'function') {
					callback();
				}
			}

			link.onload = resolve;

			prior.insertAdjacentElement('beforeend', link);
		}

		function isLoadingAsset (asset, type) {
			return loader.loading_assets.indexOf(getAssetId(asset, type)) !== -1;
		}

		function setAssetLoading (asset, type) {
			if (isLoadingAsset(asset, type)) {
				return;
			}

			loader.loading_assets.push(getAssetId(asset, type));
		}

		function unsetAssetLoading (asset, type) {
			var id = getAssetId(asset, type);

			loader.loading_assets = loader.loading_assets.filter(function (loading_asset_id) {
				return loading_asset_id !== id;
			});
		}

		function isLoadedAsset (asset, type) {
			return loader.loaded_assets.indexOf(getAssetId(asset, type)) !== -1;
		}

		function setAssetLoaded (asset, type) {
			if (isLoadedAsset(asset, type)) {
				return;
			}

			unsetAssetLoading(asset, type);
			loader.loaded_assets.push(getAssetId(asset, type));

			resolveAssetLoaded(asset, type);
		}

		function resolveAssetLoaded (asset, type) {
			var id = getAssetId(asset, type);
			if (!(id in loader.subscribers)) {
				return;
			}

			loader.subscribers[id].forEach(function (callback) {
				if (typeof callback === 'function') {
					callback();
				}
			});
		}

		function subscribeAssetLoaded (asset, type, callback) {
			var id = getAssetId(asset, type);

			if (!(id in loader.subscribers)) {
				loader.subscribers[id] = [];
			}

			loader.subscribers[id].push(callback);
		}

		function beforeLoadAsset (asset, type, callback) {
			setAssetLoading(asset, type);
			subscribeAssetLoaded(asset, type, callback);
		}

		function afterLoadAsset (asset, type, callback) { }

		function loadAsset (asset, type, callback) {
			beforeLoadAsset(asset, type, callback);

			function resolve () {
				setAssetLoaded(asset, type);
			}

			if (type === 'js') {
				includeJs(asset, resolve);
			}
			else if (type === 'css') {
				includeCss(asset, resolve);
			}

			afterLoadAsset(asset, type, callback);
		}

		function importAsset (asset, type, callback) {
			function resolve () {
				if (typeof callback === 'function') {
					callback();
				}
			}

			if (isLoadingAsset(asset, type)) {
				subscribeAssetLoaded(asset, type, resolve);
				return;
			}

			if (isLoadedAsset(asset, type)) {
				resolve();
				return;
			}

			loadAsset(asset, type, resolve);
		}

		function getAssetName (asset, type) {
			var parts = asset.split('/');
			var last_part = parts[parts.length - 1];

			return last_part.substr(0, last_part.indexOf('.' + type));
		}

		window.fields_assets_includer = {
			includeJs: function (asset, callback) {
				function resolve () {
					if (typeof callback === 'function') {
						callback();
					}
				}

				importAsset(asset, 'js', resolve);
			},
			includeCss: function (asset, callback) {
				importAsset(asset, 'css', callback);
			},
			include: function (assets, resolves) {
				var self = this;

				if (assets.css && assets.css instanceof Array) {
					assets.css.forEach(function (asset) {
						self.includeCss(asset);
					});
				}

				if (assets.js && assets.js instanceof Array) {
					assets.js.forEach(function (asset) {
						var asset_name = getAssetName(asset, 'js');

						var pass_resolve;
						if (resolves[asset_name]) {
							pass_resolve = resolves[asset_name];
						}

						function resolve () {
							if (typeof pass_resolve === 'function') {
								pass_resolve();
							}

							var window_resolve = 'fields_' + asset_name + '_resolve';
							if (window.hasOwnProperty(window_resolve)) {
								window[window_resolve]();
							}
						}

						self.includeJs(asset, resolve);
					});
				}
			}
		};
	})();
}
