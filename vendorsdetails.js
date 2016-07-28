
var app = angular.module('myApp', []);
app.controller('myCtrl',function($scope,$http){
	
	$scope.submit = function()
	{
		
		alert($scope.vid +" , "+$scope.vname +" , "+ $scope.vtype +" , "+ $scope.address +" , "+ $scope.city +" , "+ $scope.contactd +" , "+ $scope.email
		+" , "+ $scope.status +" , "+ $scope.compliances);
				
		$http.post("vendorsinsert.php",{'vid':$scope.vid,'vname':$scope.vname,'vtype':$scope.vtype,'address':$scope.address,'city':$scope.city,'contactd':$scope.contactd,
				   'email':$scope.email,'status':$scope.status,'compliances':$scope.compliances})
		.success(function(data,status,headers,config){
		$scope.msg = "Data inserted Successfully";
			$scope.clearform();
		});
		
	}
	
	
	//clear form
		$scope.clearform = function()
		{
			$scope.vid = "";
			$scope.vname = "";
			$scope.vtype = "";
			$scope.address = "";
			$scope.city = "";
			$scope.contactd = "";
			$scope.email = "";
			$scope.status = "";
			$scope.compliances = "";
		}
			
	
});	
	
	
	
