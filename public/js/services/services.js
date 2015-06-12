
var services = angular.module('AppServices',['ngResource']);
var settingurl=serviceBase+'setting/';

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
    });*/

  services.factory("CompanyCreate",function($resource){
    return $resource(settingurl+'companysetup/create',{},{post:{method:'POST',params:{},isArray:true}});
    }); 

/**** USERS******************/


	
	services.factory("GetResponce",function($resource){
return $resource('https://api.surveymonkey.net/v2/surveys/get_responses?api_key=u366xz3zv6s9jje5mm3495fk',{survey_id:65666639, respondent_ids:["4016327943","4016327376"]},{query:{method:'query',params:{},isArray:true}});
    }); 

  
 

