'use strict';
var serviceBase = 'http://localhost:81/yii/BongoERP/web/'
var app = angular.module('app', ['ngRoute','SiteControllers','AppServices']);


app.config(['$routeProvider',function($routeProvider){
		$routeProvider.
		when("/home",{controller:"SiteController",templateUrl:"pages/site/home.html"}).
		when("/",{controller:"SiteController",templateUrl:"pages/site/home.html"}).
		when("/form",{controller:"SiteController",templateUrl:"pages/template/partials/form.html"}).
		when("/page",{controller:"SiteController",templateUrl:"pages/template/partials/blankpage.html"}).
		when("/input_form",{controller:"SiteController",templateUrl:"pages/template/partials/input_form.html"}).
		when("/about",{controller:"SiteController",templateUrl:"pages/site/about.html"}).
		when("/books",{controller:"SiteController",templateUrl:"pages/users/index.html"}).
		when("/book/create",{controller:"SiteController",templateUrl:"pages/users/create.html"}).
		when("/companySetup",{controller:"SiteController",templateUrl:"pages/companySetup/partials/company-setup.html"}).
		otherwise({RedirectTo:"pages/site/home.html"});
		}]);
		
