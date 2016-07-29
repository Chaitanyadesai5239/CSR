	var app = angular.module('myApp', []);
	app.controller('myCtrl',function($scope,$http){
		$scope.loadEmployees = function(){
			//alert("In loadEmployees()");
			$http.get('fetch_employees.php').then(function(response){
				$scope.emps = response.data;
			});
		}
	
	});