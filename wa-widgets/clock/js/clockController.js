var ClockController;

if (typeof ClockController === "undefined") {

    ( function() {

        ClockController = function(controller_app, controller_name) {
            this.time_period = 1000;
            this.clockInterval = false;
            this.controller_app = controller_app;
            this.controller_name = controller_name;

            this.runClock();
        };

        ClockController.prototype.runClock = function() {
            var that = this;

            that.clockInterval = setInterval( function() {

                if ( DashboardControllers.hasOwnProperty(that.controller_app) &&
                    DashboardControllers[that.controller_app].hasOwnProperty(that.controller_name) &&
                    DashboardControllers[that.controller_app][that.controller_name].hasOwnProperty('widget_list') &&
                    DashboardControllers[that.controller_app][that.controller_name]['widget_list'].length
                ) {

                    var widgetList = DashboardControllers[that.controller_app][that.controller_name]['widget_list'],
                        widgetIDArray = {};

                        for (var index in widgetList) {
                            if (widgetList.hasOwnProperty(index)) {
                                var widget_id = widgetList[index];

                                if (typeof widgetIDArray[widget_id] === "undefined") {
                                    if ( (typeof DashboardWidgets[widget_id] !== "undefined") && (typeof DashboardWidgets[widget_id]['clock'] !== "undefined") ) {
                                        var widgetClock = DashboardWidgets[widget_id]['clock'];

                                        widgetClock.refreshClock();

                                        widgetIDArray[widget_id] = true;

                                    } else {
                                        widgetList.splice(index, 1);
                                    }

                                } else {
                                    widgetList.splice(index, 1);
                                }
                            }
                        }

                } else {
                    that.stopClock();
                }

            }, that.time_period);
        };

        ClockController.prototype.stopClock = function() {
            var that = this;

            //console.log("Удаление");

            // Stop Interval
            clearInterval(that.clockInterval);

            if (DashboardControllers.hasOwnProperty(that.controller_app) &&
                DashboardControllers[that.controller_app].hasOwnProperty(that.controller_name)
            ) {
                // Delete Controller from Array
                delete DashboardControllers[that.controller_app][that.controller_name];
            }
        };

    })();

}