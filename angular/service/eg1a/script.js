/**
 * Created by USER on 6/6/2015.
 */
(function (angular) {
    'use strict';

    function notify(win) {
        var msgs = [];
        return function (msg) {
            msgs.push(msg);
            if (msgs.length == 3) {
                win.alert(msgs.join("\n"));
                msgs = [];
            }
        };
    }

    function myControllerFn($scope, notify) {
        $scope.callNotify = function (msg) {
            notify(msg);
        };
    }

    angular
        .module('myServiceModule', [])
        .controller('MyController', ['$scope', 'notify', myControllerFn])
        .factory('notify', ['$window', notify]);
})(window.angular);