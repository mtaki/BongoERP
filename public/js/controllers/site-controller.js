var site = angular.module('SiteControllers', []);
site.controller("SiteController",function($scope,$routeParams,GetResponce,CompanyCreate){
	
	$scope.message="Welcome to angulaarrJs";
	//$scope.result=Book.data;
	
	
	
	  
	/* $scope.create=function(book){
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
	
	/* Book1.get(function(data){
        $scope.datas=data;
    }) ;*/
	
});
