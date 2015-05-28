var site = angular.module('SiteControllers', []);
site.controller("SiteController",function($scope,$routeParams,Book,Book1,CreateBook,$location,UpdateBook){
	
	$scope.message="Welcome to angulaarrJs";
	$scope.result=Book.data;
	$scope.persons=[{"id": 860,
		    "firstName": "Superman",
		    "lastName": "Yoda"
		}, 
		{
		    "id": 870,
		    "firstName": "Foo",
		    "lastName": "Whateveryournameis"
		}, {
		    "id": 590,
		    "firstName": "Toto",
		    "lastName": "Titi"
		}, {
		    "id": 803,
		    "firstName": "Luke",
		    "lastName": "Kyle"
		}];
	
	
	  
	 $scope.create=function(book){
        var successMsg= $scope.successMsg=function(data){
            alert("Physical inventory successfully saved");
            $location.path("book");
        } ;
        var errorMsg=$scope.errorMsg=function(data){
            alert(data);
        } ;
		//$scope.update(book);
		$scope.data1 = angular.copy(book);
        CreateBook.save({},$scope.data1,successMsg,errorMsg);
    } ;

	

	/*UpdateBook.get({$routeParams.id},function(data){
	$scope.getbook=data;
	});*/
	
	 Book1.get(function(data){
        $scope.datas=data;
    }) ;
	
});
