
var services = angular.module('AppServices',['ngResource']);
var settingurl=serviceBase+'setting';

services.factory('Book', ['$resource',function($resource) {
return ({data:serviceBase+'books'});
 //return $resource('http://localhost:81/yii/yii1/web/index.php/books', {},{});
}]);



/*services.factory('Phone', ['$resource',
  function($resource){
    return $resource(serviceBase+'books', {}, {
      query: {method:'GET', params:{}, isArray:true}
    });
  }]);
  
  services.factory("CompanyView",function($resource){
    return $resource(settingurl+'companysetup',{},{get:{method:'GET',params:{},isArray:true}});
    });

  services.factory("CompanyCreate",function($resource){
    return $resource(settingurl+'companysetup/create',{},{post:{method:'POST',params:{},isArray:true}});
    }); */

/**** USERS******************/
services.factory("UserView",function($resource){
    return $resource(settingurl+'users',{},{get:{method:'GET',params:{},isArray:true}});
    });

  services.factory("UserCreate",function($resource){
    return $resource(settingurl+'users/create',{},{post:{method:'POST',params:{},isArray:true}});
    }); 

  
 

