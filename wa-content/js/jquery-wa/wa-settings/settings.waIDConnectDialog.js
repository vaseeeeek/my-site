class WASettingsWaIDConnectDialog {

    constructor(options) {
        const that = this;

        // DOM
        that.$dialog = options.$dialog;
        that.$process_block = that.$dialog.find('.js-process-block');
        that.$success_block = that.$dialog.find('.js-success-block');
        that.$fail_block = that.$dialog.find('.js-fail-block');

        // VARS
        that.connect_url = options.connect_url || '';
        that.wa_url = options.wa_url || '';
        that.oauth_modal = options.oauth_modal || false;
        that.dialog = null;

        // DYNAMIC VARS

        // INIT
        that.init();
    }

    init() {
        const that = this;
        that.initDialog();
    }

    initDialog() {
        const that = this;

        that.dialog = $.waDialog({
            html: that.$dialog,
            onOpen: function () {
                that.connect();
            },
            onClose() {
                that.close();
            }
        });
    }

    close() {
        $.wa.content.load(location.pathname, true);
    }

    connect() {
        const that = this,
            connect_url = that.connect_url,
            request = $.post(connect_url),
            onDone = function (r) {

                if (r && r.status === 'ok') {
                    that.$success_block.show();
                    that.$process_block.hide();
                    that.$dialog.trigger('connected', [r.data, that]);

                    return;
                }

                that.$fail_block.show();
                that.$process_block.hide();

                if (r && r.errors) {
                    $.each(r.errors, function (key, error_msg) {
                        let $error = $('<p class="errormsg">').text(error_msg);
                        that.$fail_block.append($error);
                    });
                }
            },
            onFail = function () {
                that.$fail_block.show();
                that.$process_block.hide();
            },
            onAlways = function () {
                that.$dialog.find('.js-close-dialog').removeAttr('disabled');
            };

        request.done(onDone).fail(onFail).always(onAlways);
    }
}
