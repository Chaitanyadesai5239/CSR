
	var app = angular.module('myApp', []);
	app.controller('myCtrl',function($scope,$http){
	$scope.submit = function()
	{
	$http.post("insert.php",{'employeename':$scope.employeename,'departmentname':$scope.departmentname,'fname':$scope.fname,'mname':$scope.mname,'optionsRadios1':$scope.optionsRadios1,'optionsRadios2':$scope.optionsRadios2,'bdate':$scope.bdate,'hdate':$scope.hdate,'email':$scope.email,'mobilen':$scope.mobilen})
	.success(function(data,status,headers,config){
		
		$scope.msg="Data inserted successfully";
			$scope.clearform();
	});
	}
	
		//clear form
		$scope.clearform = function()
		{
			$scope.employeename = ""; 
			$scope.departmentname = "";
			$scope.fname = "";
			$scope.mname = "";
			$scope.optionsRadios1 = "";
			$scope.optionsRadios2 = "";
			$scope.bdate = "";
			$scope.hdate = "";
			$scope.email = "";
			$scope.mobilen = "";
			
		}
	
	});


	
