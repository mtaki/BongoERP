'use strict';
var serviceBase = 'http://localhost:81/yii/BongoERP/web/';
var users = angular.module('users',['setting','UsersModule']);


users.config(['$routeProvider',function($routeProvider){
		$routeProvider.
		
		//users
		when("/userAdmin",{controller:"UsersController",templateUrl:"pages/admin/user/partials/admin.html"}).
		when("/userCreate",{controller:"UsersController",templateUrl:"pages/admin/user/partials/_form.html"}).
		otherwise({RedirectTo:"pages/site/home.html"});
		}]);
		
