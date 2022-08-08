var WASettingsDatabase = ( function($) {

    WASettingsDatabase = function(options) {
        var that = this;

        // DOM
        that.$wrapper = options["$wrapper"];
        that.$list_dialog_link = that.$wrapper.find('.js-show-list');

        // DYNAMIC VARS

        // INIT
        that.initClass();
    };

    WASettingsDatabase.prototype.initClass = function() {
        var that = this;

        //
        var $sidebar = $('#js-sidebar-wrapper');
        $sidebar.find('ul li').removeClass('selected');
        $sidebar.find('[data-id="db"]').addClass('selected');
        //
        that.initListDialogLink();
    };

    WASettingsDatabase.prototype.initListDialogLink = function() {
        var that = this,
            $link = that.$list_dialog_link,
            href = "?module=settingsDatabaseListDialog";

        $link.on('click', function () {
            $.get(href, function (html) {
                $.waDialog({
                    html
                });
            });
        });
    };

    return WASettingsDatabase;

})(jQuery);