<?php
return array (
  'status' => 'ok',
  'data' => 
  array (
    'a-violation-0905' => 
    array (
      'html' => 
      array (
        'header_top' => '
<section class="a-product-violation" id="a-product-violation6315a4a2f138b" style="background-color: #ffcccc; padding: 10px;">
    <form class="js-buy-product-form" method="POST" action="https://www.webasyst.ru/buy/apps/?utm_campaign=violation&utm_medium=backend&utm_source=installation-announce">
        <p style="margin: 0;">
            <i class="icon16 exclamation"></i>
            <strong>У вас установлены нелицензионные программные продукты:</strong>  приложение <em>Shop-Script</em>.

            Чтобы использовать эти продукты, купите и активируйте их лицензии в приложении «Инсталлер». Или удалите их, чтобы не нарушать лицензионное соглашение Webasyst.

                    <input type="hidden" name="hash" value="d5ee84337619cdf598cd68ae0874852f">
            <input type="hidden" name="domain" value="my-site">
            <input type="hidden" name="app_id[]" value="129">
            <a href="javascript:void(0)" class="js-submit-button">Купить или активировать лицензию</a>
                </p>
    </form>
</section>
<script>
    $(function () {
        var $wrapper_id = $(\'#a-product-violation6315a4a2f138b\');
        $wrapper_id.on(\'click\', \'.js-submit-button\', function (e) {
            e.preventDefault();
            var $link = $(this);
            var $form = $link.closest(\'.js-buy-product-form\');
            $form.submit();
        });
    });
</script>',
        'notification' => '
<section class="a-product-violation" id="a-product-violation6315a4a2f2004">
    <form class="js-buy-product-form" method="POST" action="https://www.webasyst.ru/buy/apps/?utm_campaign=violation&utm_medium=backend&utm_source=installation-announce">
        <strong>У вас установлены нелицензионные программные продукты:</strong>  приложение <em>Shop-Script</em>.

        Чтобы использовать эти продукты, купите и активируйте их лицензии в приложении «Инсталлер». Или удалите их, чтобы не нарушать лицензионное соглашение Webasyst.

                    <input type="hidden" name="hash" value="d5ee84337619cdf598cd68ae0874852f">
            <input type="hidden" name="domain" value="my-site">
            <input type="hidden" name="app_id[]" value="129">
            <a href="javascript:void(0)" class="js-submit-button">Купить или активировать лицензию</a>
            </form>
</section>
<script>
    $(function () {
        var $wrapper_id = $(\'#a-product-violation6315a4a2f2004\');
        $wrapper_id.on(\'click\', \'.js-submit-button\', function (e) {
            e.preventDefault();
            var $link = $(this);
            var $form = $link.closest(\'.js-buy-product-form\');
            $form.submit();
        });
    });
</script>',
      ),
    ),
    'a-violation-shop-blk-220905' => 
    array (
      'app_id' => 'shop',
      'ui2.0' => true,
      'html' => 
      array (
        'header_top' => '

<div class="js-suspend-dialog" id="js-suspend-dialog6315a4a2f36e4" style="display: none;">
    
    <div class="dialog js-dialog-suspended-install" style="top: 4rem;">
        <div class="dialog-background"></div>

        <div class="dialog-body" style="margin-top: -2rem;">
            <div class="dialog-content">
                <div class="align-center">
                    <picture>
                        <img src="" alt="" class="js-dialog-suspended-logo custom-mt-12" style="width: 6rem; height: 6rem;">
                    </picture>

                    <div class="custom-my-16">

                                                    <h3>Лицензия не активирована</h3>
                        
                        <div class="custom-mx-32 custom-my-16 small">
                                                            Чтобы использовать приложение <strong>«Shop-Script»</strong>, активируйте его лицензию в «Инсталлере». Если у вас нет лицензии, её нужно приобрести. Или удалите этот программный продукт, если вы им не пользуетесь, чтобы больше не получать таких предупреждений.
                                                    </div>
                    </div>

                    <div class="custom-my-16">
                                                    <form class="js-buy-product-form" method="POST" action="https://www.webasyst.ru/buy/apps/?utm_campaign=violation&utm_medium=backend&utm_source=app-block">
                                <button type="submit" class="button rounded green larger custom-mr-0 gradient" href="javascript:void(0);">Активировать лицензию</button>
                                                                                                                                            <input type="hidden" name="app_id[]" value="shop">
                                                                    
                                <input type="hidden" name="hash" value="d5ee84337619cdf598cd68ae0874852f">
                                <input type="hidden" name="domain" value="my-site">
                            </form>
                                            </div>
                                            <a href="javascript:void(0);" class="gray small js-dialog-close">Разберусь позже</a>
                                    </div>
            </div>
        </div>
    </div>

    
    <style>
        .dialog-suspended-window {
            padding-bottom: 0;
        }

        .dialog-suspended-content {
            display: flex;
            align-items: center;
        }

        .dialog-suspended-margin {
            margin: 1.5rem;
        }

        .dialog-suspended-text {
            width: 100%;
            text-align: center;
        }
    </style>
    
    <div class="dialog persistent js-dialog-suspended-install-old">
        <div class="dialog-background"></div>

        <div class="dialog-window dialog-suspended-window">
            <div class="dialog-content dialog-suspended-content">
                <div class="dialog-suspended-text">
                    <div class="dialog-suspended-margin large">

                        <picture>
                            <img src="" alt="" class="js-dialog-suspended-logo custom-mt-12" style="width: 48px; height: 48px; margin: 10px 0;">
                        </picture>

                        <h2>Лицензия истекла</h2>
                        <p style="font-size: 14px; margin: 15px 30px 15px; line-height: 1.4;">
                                                            Чтобы использовать приложение <strong>«Shop-Script»</strong>, активируйте его лицензию в «Инсталлере». Если у вас нет лицензии, её нужно приобрести. Или удалите этот программный продукт, если вы им не пользуетесь, чтобы больше не получать таких предупреждений.
                                                    </p>
                    </div>

                    <div class="dialog-suspended-margin">
                                                    <form class="js-buy-product-form" method="POST" action="https://www.webasyst.ru/buy/apps/?utm_campaign=violation&utm_medium=backend&utm_source=app-block">
                                <button type="submit" class="button rounded green gradient" href="javascript:void(0);">Купить лицензию</button>
                                                                                                                                            <input type="hidden" name="app_id[]" value="shop">
                                                                    
                                <input type="hidden" name="hash" value="d5ee84337619cdf598cd68ae0874852f">
                                <input type="hidden" name="domain" value="my-site">
                            </form>
                                            </div>
                                            <a href="javascript:void(0);" class="gray js-dialog-close-old">Разберусь позже</a>
                                    </div>
            </div>
        </div>
    </div>

    <script>
      document.addEventListener(\'DOMContentLoaded\', function() {
        new class {
          constructor() {
            // DOM
            this.$document = $(document);
            this.$head = this.$document.find(\'head\');
            this.$wrapper = this.$document.find(\'#js-suspend-dialog6315a4a2f36e4\');
            this.$document.find(\'.wa-announcement-close[data-key="a-violation-shop-blk-220905"]\').remove();

            const that = this;
            this.isStillBlocked().done(function (is_blocked) {
                if (is_blocked) {
                    if (that.setVars()) {
                        that.init();
                    }
                } else {
                    that.$wrapper.remove();
                }
            });
          }

          init() {
            this.callDialog();
          }

          setVars() {
            try {
              this.appIcon = this.$document.find(\'#wa-nav #wa-applist li.selected img\').attr(\'src\');
              if (typeof this.appIcon !== \'string\') {
                this.$wrapper.remove();
                return false;
              }
              this.appRootUrl = this.appIcon.split(\'wa-apps\')[0];
              if (typeof this.appRootUrl !== \'string\') {
                this.$wrapper.remove();
                return false;
              }
              this.appBackendUrl = this.$document.find(\'#wa-nav #wa-applist li.selected a\').attr(\'href\').split(\'shop\')[0];
              if (typeof this.appBackendUrl !== \'string\') {
                this.$wrapper.remove();
                return false;
              }
              this.closePostUrl = this.appBackendUrl + \'installer/?module=announcement&action=hide\';
              this.isNewUi = document.documentElement.classList.contains(\'is-wa2\');

              return true;
            } catch(error) {
              this._catchError(error);
              return false;
            }
          }

          isStillBlocked() {
            try {
                var $def = $.Deferred();
                var post = function(url, data) {
                    return $.ajax({
                        url: url,
                        data: data,
                        dataType: "json",
                        xhrFields: {
                            withCredentials: true
                        },
                        crossDomain: true,
                        type: \'POST\'
                    });
                };

                post(\'https://updates.webasyst.com/download/3.0/installer/product_lease_status/\', $.extend({"hash":"d5ee84337619cdf598cd68ae0874852f","domain":"my-site.ru"}, { slug: \'shop\' }))
                    .done(function (response) {
                        var is_blocked = response.status === \'ok\' &&
                            response.data &&
                            response.data.statuses &&
                            response.data.statuses[\'shop\'] &&
                            response.data.statuses[\'shop\'].status === \'blocked\';

                        $def.resolve(is_blocked);
                    });

                return $def;
            } catch(error) {
                this._catchError(error);
            }
          }

          callDialog() {
            try {
              const that = this;

              this._checkDialogScript();
              const appIcon = this.appIcon;

              if (this.isNewUi) {
                $.waDialog({
                  html: this.$wrapper.find(\'.js-dialog-suspended-install\')[0].outerHTML,
                  esc: false,
                  onOpen($dialog, dialog) {
                    dialog.$block.find(\'.js-dialog-suspended-logo\').attr(\'src\', appIcon);
                  },
                  onClose() {
                    that._postOnCloseDialog();
                  }
                });
              } else {
                $(\'.js-suspend-dialog\').show();
                const dialog = this.$wrapper.find(\'.js-dialog-suspended-install-old\').waDialog({
                  esc: false,
                  width: \'600px\',
                  height: \'350px\',
                  onLoad() {
                    const top = $(\'#wa-app\').offset().top;
                    const bg = that.$wrapper.find(\'.js-dialog-suspended-install-old\').find(\'.dialog-background\');
                    if (bg.length) {
                      bg.css(\'top\', top);
                      document.body.style.overflow = \'hidden\';
                    }
                    that.$wrapper.find(\'.js-dialog-suspended-logo\').attr(\'src\', appIcon);
                  },
                  onClose() {
                    that._postOnCloseDialog();
                    document.body.style.removeProperty(\'overflow\');
                  }
                });

                dialog.find(\'.js-dialog-close-old\').on(\'click\', function(event) {
                  event.preventDefault();
                  dialog.trigger(\'close\');
                });
              }

            } catch(error) {
              this._catchError(error);
            }
          }

          _checkDialogScript() {
            const pathDialog = this.isNewUi ? \'\' : \'.dialog\';
            const scriptPath = this.appRootUrl + \'wa-content/js/jquery-wa/wa\'+ pathDialog +\'.js\'
            const isScriptExist = this.$document.find(\'script[src^="\'+ scriptPath + \'"]\').length;

            if (isScriptExist) {
              return;
            }

            this._putDialogScript(scriptPath);
          }

          _putDialogScript(path) {
            let $script = document.createElement(\'script\');
            $script.src = path;

            this.$head.append($script);
          }

          _postOnCloseDialog() {
            try {
                $.post(this.closePostUrl, { key: \'a-violation-shop-blk-220905\'});
            } catch(error) {
            }
          }

          _catchError(error) {
            console.trace(error);

            this.$wrapper.remove();
          }
        }
      });
    </script>
</div>
',
      ),
    ),
    'a-offer-2022-08' => 
    array (
      'html' => 
      array (
        'header_top' => '
<section class="a-offer" id="a-offer6315a4a2f417f" style="background-color: #ffeeaa; padding: 10px;">
    <p style="margin: 0;">

            
                    <b>-50% на «Весь Webasyst» до 30 сентября</b>: комплект всех 15+ главных приложений Webasyst с максимальной скидкой и <b>выгодой до 70 994 рублей</b>. Чем больше приложений вы покупали ранее, тем ниже будет ваша персональная стоимость всего комплекта, а скидка сохранится. <input type="button" value="Купить весь Webasyst" onClick="window.location.href=\'https://www.webasyst.ru/buy/store/bundle/all-webasyst/\';"> &nbsp; <a href="https://www.webasyst.ru/pricing/#ownserver" target="_blank">Подробнее о комплекте</a>
        
    
    </p>
</section>',
        'notification' => '
<section class="a-offer" id="a-offer6315a4a300ad4">
    
            
                    <strong style="color: var(--text-color-strongest);">-50% на «Весь Webasyst» до 30 сентября</strong>: комплект всех 15+ главных приложений Webasyst с максимальной скидкой и <b>выгодой до 70 994 рублей</b>. Чем больше приложений вы покупали ранее, тем ниже будет ваша персональная стоимость всего комплекта, а скидка сохранится. <input type="button" value="Купить весь Webasyst" onClick="window.location.href=\'https://www.webasyst.ru/buy/store/bundle/all-webasyst/\';"> &nbsp; <a href="https://www.webasyst.ru/pricing/#ownserver" target="_blank">Подробнее о комплекте</a>
        
    </section>',
      ),
    ),
  ),
);
