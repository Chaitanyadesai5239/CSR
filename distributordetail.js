

	var app = angular.module('myApp',[]);
	app.controller('myCtrl', function($scope,$http){
		$scope.submit = function()
		{
			alert($scope.distributorid+""+$scope.distributorname +","+$scope.distributortype +","+$scope.address +","+$scope.city +","+
			$scope.contactd +","+$scope.email +","+$scope.status +","+ $scope.compliances);
	
	$http.post("distributorinsert.php",{'distributorid':$scope.distributorid,'distributorname':$scope.distributorname,
	'distributortype':$scope.distributortype,'address':$scope.address,'city':$scope.city,
	'contactd':$scope.contactd,'email':$scope.email,'status':$scope.status,'compliances':$scope.compliances})
	
	.success(function(data,success,header,config){
		$scope.msg = "Data inserted Successfully"
		$scope.clearform();
		
	});
		}
	
	
		//fetch distributor id
		
		$scope.loadid = function()
		{
		$http.get("fetch_distributorid.php")
		.then(function(response){
		$scope.distributorid = response.data;	
			
		});
		
		}
	
	
	//clear form
		$scope.clearform = function()
		{
			$scope.distributorid = "";
			$scope.distributorname = "";
			$scope.distributortype = "";
			$scope.address = "";
			$scope.city = "";
			$scope.contactd = "";
			$scope.email = "";
			$scope.status = "";
			$scope.compliances = "";
			
		}
	
	
	});
	
