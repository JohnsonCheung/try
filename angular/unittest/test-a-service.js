/**
 * Created by USER on 20/6/2015.
 */
(function (angular) {
    angular.module('app', [])
        .factory('obj', a);
    function a() {
        return {
            cpyPrp: cpyPrp
        }
    }

    function cpyPrp(srcObj, prpNmLvs, tarObj) {
        var o = {}
        var a1 = Object.getOwnPropertyNames(tarObj);
        var a2 = prpNmLvs.split(' ');
        cp(tarObj,a1);
        cp(srcObj,a2);
        return o;
        function cp(obj,ay) {
            ay.forEach(function(i) {
                o[i] = obj[i]
            })
        }
    }
})(angular);

module = angular.mock.module;
inject = angular.mock.inject;
describe('my service "obj"', function () {
    var $obj;
    beforeEach(module('app'));
    beforeEach(inject(function (_obj_) {
        $obj = _obj_;
    }));
    it('should be cpyPrp', function () {
        var act;
        var a = {a: 1, b: 2};
        var b = {x: 9, y: 8, z: 7};
        act = $obj.cpyPrp(a, "a b", b);
        expect(act).toEqual({a: 1, b: 2, x: 9, y: 8, z: 7})
        expect(a).toEqual({a:1,b:2});
        expect(b).toEqual({x: 9, y: 8, z: 7});

        act = $obj.cpyPrp(a, "b", b);
        expect(act).toEqual({b: 2, x: 9, y: 8, z: 7})
        expect(a).toEqual({a:1,b:2});
        expect(b).toEqual({x: 9, y: 8, z: 7});
        debugger;
    })
});
