
	var app = angular.module('myApp', []);
	app.controller('myCtrl',function($scope,$http){
		//$scope.employeeid = 'E001'
		$scope.loadEmpId = function(){
			//alert("In loadEmpId()");
			$http.get('fetch_empid.php').then(function(response){
				$scope.employeeid = response.data;
			});
		}
		$scope.loadDepartments = function(){
			//alert("In loadDepartments()");
			$http.get('fetch_dep.php').then(function(response){
				$scope.deps = response.data;
				$scope.loadEmpId();
			});
		}
		
		$scope.insert = function(){
			/*alert($scope.employeeid+" , "+$scope.departmentname.DEP_ID+" , "+$scope.fname+" , "+$scope.mname+" , "+$scope.lname
					+" , "+$scope.gender+" , "+$scope.bdate+" , "+$scope.hdate+" , "+$scope.email+" , "+$scope.mobilen);*/
			$http.post("employeeeinsert.php",{'employeeid':$scope.employeeid,'depid':$scope.departmentname.DEP_ID,'fname':$scope.fname,
						'mname':$scope.mname,'lname':$scope.lname,'gender':$scope.gender,'bdate':$scope.bdate,
						'hdate':$scope.hdate,'email':$scope.email,'mobilen':$scope.mobilen})
			.success(function(data,status,headers,config){
				$scope.msg="Data inserted successfully";
				$scope.clearform();
				alert("Data insert successfully.");
				window.location = "employeeedisplay.php";
			});
		}
	
		//clear form
		$scope.clearform = function()
		{
			$scope.employeename = ""; 
			//$scope.departmentname = "";
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


	
