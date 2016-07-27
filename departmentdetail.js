
var app = angular.module('myApp', []);
app.controller('myCtrl',function($scope,$http){
	
	$scope.submit = function()
	{
		
		alert($scope.departmentid +" , "+ $scope.departmentname +" , "+ $scope.description );
				
		$http.post("departmentinsert.php",{'departmentid':$scope.departmentid,'departmentname':$scope.departmentname,'description':$scope.description})
		.success(function(data,status,headers,config){
		$scope.msg = "Data inserted Successfully";
			$scope.clearform();
		});
		
	}
	
	
	//clear form
		$scope.clearform = function()
		{
			$scope.departmentid = "";
			$scope.departmentname = "";
			$scope.description = "";
		}
			
	
});	
	
	
	
