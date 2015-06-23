<html>
<head>
<meta charset="utf-8">
<title>Load Plan System</title>
<link rel="systelsheet" href="css\menu.css">
<script type="text/javascript" src="angular.min.js"></script>
<script>
var loadPlanApp = angular.module("loadPlanApp",[]);
loadPlanApp.controller("menuController", function($scope) {
	$scope.h1 = "Load Plan System"
/*	
	var td1,td2,td3,td4;
	var tr1,tr2,tr3,tr4;

	td1 = {isText:true, caption:"aaa"}
	td2 = {isText:true, caption:"bbb"}
	td3 = {isText:true, caption:"ccc"}
	tr1 = {tCells:[td1,td2,td3,td4]}

	td1 = {isBtn:true, caption:"a1"}
	td2 = {isBtn:true, caption:"b1"}
	td3 = {isBtn:true, caption:"c1"}
	tr2 = {tCells:[td1,td2,td3,td4]}

	td1 = {isText:true, caption:"a2"}
	td2 = {isText:true, caption:"b2"}
	td3 = {isText:true, caption:"c2"}
	tr3 = {tCells:[td1,td2,td3,td4]}

	td1 = {isBtn:true, caption:"a3"}
	td2 = {}
	td3 = {isText:true, caption:"c3"}
	tr4 = {tCells:[td1,td2,td3,td4]}
	$scope.tRows = [tr1,tr2,tr3,tr4]
	$scope.rows = [{a:1,b:2,c:3}]
	debugger;
*/	
})


</script>
</head>
<body ng-App="loadPlanApp"  ng-controller="menuController">
	<h1>{{h1}}</h1>
	<table>
		<tr ng-repeat="tr in tRows">
			<td ng-repeat="td in tr.tCells">
			<p ng-If="td.isText">{{td.caption}}</p>
			<input type="button" ng-If="td.isBtn" ng-value="td.caption">
		</tr>
		<tr ng-repeat="tr in rows">
		<td>{{tr.a}}<td>{{tr.b}}<td>{{tr.c}}
		</tr>
	</table>
</body>
</html>