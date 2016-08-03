
var app = angular.module('myApp',[]);
app.controller('myCtrl',function($scope,$http){
	
	//load project name
	$scope.loadprojectname = function()
	{
		$http.get("fetch_projectname.php")
		.then(function(response){
		$scope.names = response.data;
			
		});
		
	}
	
	
	
	
	
	
$scope.submit = function()
{
	alert($scope.projectname.PROJECT_ID+","+$scope.date+","+$scope.activityname+","+$scope.activitydetails+","+
	$scope.moneyspent+","+$scope.comment+","+$scope.employee+","+$scope.images+","+$scope.video)

	$http.post("responsiveactivityprojectinsert.php",{'pid':$scope.projectname.PROJECT_ID,'date':$scope.date,
		'activityname':$scope.activityname,'activitydetails':$scope.activitydetails,'moneyspent':$scope.moneyspent,
			'comment':$scope.comment,'employee':$scope.employee,'images':$scope.images,'video':$scope.video,})
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