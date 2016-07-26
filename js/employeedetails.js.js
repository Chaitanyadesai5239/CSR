
	var app = angular.module('myApp', []);
	app.controller('myCtrl',function($scope,$http){
	$scope.submit = function()
	{
	$http.post("insert.php",{'clientid':$scope.clientid,'clientname':$scope.clientname,'address':$scope.address,'city':$scope.city,'contactp':$scope.contactp,'phonen':$scope.phonen,'mobilen':$scope.mobilen,'email':$scope.email})
	.success(function(data,status,headers,config){
		
		$scope.msg="Data inserted successfully";
			$scope.clearform();
	});
	}
	
		//clear form
		$scope.clearform = function()
		{
			$scope.clientid = ""; 
			$scope.clientname = "";
			$scope.address = "";
			$scope.city = "";
			$scope.contactp = "";
			$scope.phonen = "";
			$scope.mobilen = "";
			$scope.email = "";
			
		}
	
	});


	
