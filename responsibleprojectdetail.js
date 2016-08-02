 
var app = angular.module('myApp',[]);
app.controller('myCtrl', function($scope,$http){
	
	
	//load id
	$scope.loadresponsibleid = function()
		{
			$http.get("fetch_responsibleprojectid.php")
				.then(function(response){
			$scope.pid = response.data;	
				$scope.loadclientname();
				
			});
		}
		
		
	//load client name

	$scope.loadclientname = function()
	{
		//alert("load name");
		$http.get("fetch_clientname.php")
		.then(function(response){
			$scope.client = response.data;
			
		});
		
		
		
	}
	
	
	

	$scope.submit = function()
		{
			
			$http.post("responsibleprojectdetailinsert.php",{'pid':$scope.pid,'projectname':$scope.projectname,'projecttype':$scope.projecttype,
				'pdate':$scope.pdate,'clientname':$scope.clientname,'start':$scope.start,
					'end':$scope.end,'location':$scope.location,'goal':$scope.goal,'consultantname':$scope.consultantname,'comment':$scope.comment})
						
						.success(function(data,status,headers,config)
					{
				
		$scope.msg = "Data Inserted Successfully";
	$scope.clearform();
		

});

}


	
	

    //clear form
		$scope.clearform = function()
		{
			$scope.pid = "";
			$scope.projectname = "";
			$scope.projecttype = "";
			$scope.pdate = "";
			$scope.clientname = "";
			$scope.start = "";
			$scope.end = "";
			$scope.location = "";
			$scope.goal = "";
			$scope.consultantname = "";
			$scope.comment = "";
		}
		
		
		


});