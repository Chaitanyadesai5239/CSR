
var app = angular.module('myApp', []);
app.controller('myCtrl',function($scope,$http,$location){
	
	$scope.submit = function()
	{
		
		alert($scope.vid +" , "+$scope.vname +" , "+ $scope.vtype +" , "+ $scope.address +" , "+ $scope.city +" , "+ $scope.contactd +" , "+ $scope.email
		+" , "+ $scope.status +" , "+ $scope.compliances);
				
		$http.post("vendorsinsert.php",{'vid':$scope.vid,'vname':$scope.vname,'vtype':$scope.vtype,'address':$scope.address,'city':$scope.city,'contactd':$scope.contactd,
				   'email':$scope.email,'status':$scope.status,'compliances':$scope.compliances})
		.success(function(data,status,headers,config){
		$scope.msg = "Data inserted Successfully";
			$scope.clearform();
			alert("Data Insert Successfully");
			window.location = "vendorsdisplay.php";
			
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
		
		//display query
		$scope.getdata = function()
		{
			
			$http.get("vendorsselect.php")
			.then(function(response)
			{
				$scope.names = response.data;
				
				
			});
				
		}
		
		//fetch_vendorsid
		$scope.loadvendorsid = function()
		{
			$http.get("fetch_vendorsid.php")
			.then(function(response){
				
			$scope.vid = response.data;	
				
			});
			
		}
	
			
	
});	
	
	
	
