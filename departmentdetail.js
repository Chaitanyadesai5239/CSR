
var app = angular.module('myApp', []);
app.controller('myCtrl',function($scope,$http){
	
	$scope.submit = function()
	{
		
		alert($scope.departmentid +" , "+ $scope.departmentname +" , "+ $scope.description );
				
		$http.post("departmentinsert.php",{'departmentid':$scope.departmentid,'departmentname':$scope.departmentname,'description':$scope.description})
		.success(function(data,status,headers,config){
		$scope.msg = "Data inserted Successfully";
			$scope.clearform();
				alert("Data Insert Successfully");
			window.location = "departmentdisplay.php";
		});
		
	}
	
	
	//clear form
		$scope.clearform = function()
		{
			$scope.departmentid = "";
			$scope.departmentname = "";
			$scope.description = "";
		}
		
		
		//display query
		$scope.getdata = function()
		{
			
			$http.get("departmentselect.php")
			.then(function(response)
			{
				$scope.names = response.data;
			});
				
		}
		
		//fetch_departmentid
		$scope.loaddepartmentid = function()
		{
			
			$http.get("fetch_departmentid.php")
		.then(function(response){
			$scope.departmentid = response.data;
			
			
		});
		
			
		}
		
			
	
});	
	
	
	
