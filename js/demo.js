
	var app = angular.module('myApp', []);
	app.controller('myCtrl',function($scope,$http){
	$scope.submit = function()
	{
	$http.post("insert.php",{'employeeid':$scope.employeeid,'employeename':$scope.employeename,'departmentname':$scope.departmentname,'fname':$scope.fname,'mname':$scope.mname,'gender':$scope.gender,'bdate':$scope.bdate,'hdate':$scope.hdate,'email':$scope.email,'mobilen':$scope.mobilen})
	.success(function(data,status,headers,config){
		
		$scope.msg="Data inserted successfully";
			$scope.clearform();
	});
	}
	
		//clear form
		$scope.clearform = function()
		{
			$scope.employeeid = ""; 
			$scope.employeename = ""; 
			$scope.departmentname = "";
			$scope.fname = "";
			$scope.mname = "";
			$scope.gender = "";
			$scope.bdate = "";
			$scope.hdate = "";
			$scope.email = "";
			$scope.mobilen = "";
			
		}
	
	});


	
