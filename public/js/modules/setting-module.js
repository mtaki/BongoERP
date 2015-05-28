'use strict';
var serviceBase = 'http://localhost:81/yii/BongoERP/web/'
var setting = angular.module('setting', ['ngRoute','AppServices']);


setting.config(['$routeProvider',function($routeProvider){
		$routeProvider.
		when("/",{controller:"SiteController",templateUrl:"pages/site/home.html"}).
		//Admin and security setup
		/*when("/companyAdmin",{controller:"CompanySetupController",templateUrl:"pages/admin/company-setup/partials/admin.html"}).
		when("/companyCreate",{controller:"CompanySetupController",templateUrl:"pages/admin/company-setup/partials/_form.html"}).
			//users
		when("/userAdmin",{controller:"UsersController",templateUrl:"pages/admin/user/partials/admin.html"}).
		when("/userCreate",{controller:"UsersController",templateUrl:"pages/admin/user/partials/_form.html"}).

		/*when("/role",{controller:"SiteController",templateUrl:"pages/admin/role/show.html"}).
		when("/form",{controller:"SiteController",templateUrl:"pages/admin/user/_form.html"}).
		when("/books",{controller:"SiteController",templateUrl:"pages/users/index.html"}).
		when("/book/create",{controller:"SiteController",templateUrl:"pages/users/create.html"}).

		when("/user/update",{controller:"SiteController",templateUrl:"pages/admin/user/partials/update.html"}).
		when("/user/table",{controller:"SiteController",templateUrl:"pages/admin/user/partials/table.html"}).
		when("/user/page",{controller:"SiteController",templateUrl:"pages/admin/user/partials/page_empty.html"}).*/
		otherwise({RedirectTo:"pages/site/home.html"});
		}]);
		
