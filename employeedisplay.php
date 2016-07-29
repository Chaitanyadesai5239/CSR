<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Supplier </title>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="css/sb-admin.css" rel="stylesheet">
		<!-- Morris Charts CSS -->
		<link href="css/plugins/morris.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script src="employeedisplay.js"></script>
	</head>
		
	<body ng-app="myApp" ng-controller="myCtrl" ng-init="loadEmployees()">
		<div id="wrapper" >
			<?php
				include('header.php');		
			?>
			<div id="page-wrapper" style="background-color:;">
				<div class="container">
					<div class="jumbotron">
						<h3 style="align:center">Employees Records : </h3>
					</div>
					<a href="employeedetails.php"><button class="btn btn-success">Add New</button></a>
					<form novalidate>
						<div class="form-group">
							<table class="table table-border">
								<th>Index</th>
								<th>Employee Name</th>
								<th>Department Name</th>
								<th colspan="2">Oprations</th>
								<tr ng-repeat="x in emps">
									<td>{{$index+1}}</td>
									<td>{{x.FIRST_NAME+" "+x.LAST_NAME}}</td>
									<td>{{x.DEP_NAME}}</td>
									<td></td>
									<td></td>
								</tr>
							</table>
						</div>
					</form>
				</div>
			</div>
        </div>
        <!-- /#page-wrapper -->

    
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	
	<?php
		include('footer1.php');
	
	?>
	
	</body>
</html>