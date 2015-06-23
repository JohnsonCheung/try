/**
 * Created by USER on 20/6/2015.
 */
/**
 *
 * ref to
 *      https://docs.angularjs.org/guide/unit-testing
 * section
 *      Testing a Controller
 */
angular.module('app', [])
    .controller('PasswordController', function PasswordController($scope) {
        $scope.password = '';
        $scope.grade = function () {
            var size = $scope.password.length;
            if (size > 8) {
                $scope.strength = 'strong';
            } else if (size > 3) {
                $scope.strength = 'medium';
            } else {
                $scope.strength = 'weak';
            }
        };
    });
module = angular.mock.module;
inject = angular.mock.inject;
describe('PasswordController', function () {
    beforeEach(module('app'));

    var $controller;
    beforeEach(inject(function (_$controller_) {
        // The injector unwraps the underscores (_) from around the parameter names when matching
        $controller = _$controller_;
    }));

    describe('$scope.grade', function () {
        it('sets the strength to "strong" if the password length is >8 chars', function () {
            var $scope = {};
            var controller = $controller('PasswordController', {$scope: $scope});
            $scope.password = 'longerthaneightchars';
            $scope.grade();
            expect($scope.strength).toEqual('strong');
        });
    });
});