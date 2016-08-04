
var app = angular.module('myApp',[]);
app.controller('myCtrl',function($scope,$http){
		
	//load project name
	$scope.loadprojectname = function()
	{
		$http.get("fetch_projectname.php")
		.then(function(response){
		$scope.names = response.data;
		$scope.loademployee();
		});
		
	}
	
	//load emplouee name
	
	$scope.loademployee = function()
	{
	$http.get("fetch_employeesname.php")
	.then(function(response){
		$scope.name = response.data;
		
		
	});
	
	}
	
	
$scope.submit = function()
{
	alert($scope.projectname.PROJECT_ID+","+$scope.date+","+$scope.activityname+","+$scope.activitydetails+","+
	$scope.moneyspent+","+$scope.employee.FIRST_NAME+","+$scope.employee.MIDDLE_NAME +","+$scope.employee.LAST_NAME+","+$scope.images+","+$scope.video+","+$scope.comment);

	$http.post("responsiveactivityprojectinsert.php",{'pid':$scope.projectname.PROJECT_ID,'date':$scope.date,
		'activityname':$scope.activityname,'activitydetails':$scope.activitydetails,'moneyspent':$scope.moneyspent,
			'eid':$scope.employee.FIRST_NAME.,'images':$scope.images,'video':$scope.video,'comment':$scope.comment})
				.success(function(data,status,headers,config){
	
			$scope.msg = "Data inserted successfully";
		$scope.clearform();
	});
	}
	
	
	 //clear form
		$scope.clearform = function()
		{
			$scope.projectname = "";
			$scope.date = "";
			$scope.activityname = "";
			$scope.activitydetails = "";
			$scope.moneyspent = "";
			$scope.comment = "";
			$scope.employee = "";
			$scope.images = "";
			$scope.video = "";
			
		}

});