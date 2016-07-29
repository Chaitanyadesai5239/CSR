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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="departmentdetail.js"></script>
	
	<style>
	table, th , td {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
	}
	table tr:nth-child(odd) {
  background-color: #f1f1f1;
	}
	table tr:nth-child(even) {
  background-color: #ffffff;
	}
	</style>
	

	</head>
	<body ng-app="myApp" ng-controller="myCtrl" ng-init="getdata()">
	
	<div id="wrapper" >
		<?php
		include('header.php');		
		?>
		<div id="page-wrapper" style="background-color:;">
	
		<div class="container">
		<div class="jumbotron">
		<h3 style="align:center">Client Details</h3>
		</div>
	
		<a href="departmentdetail.php"><button class="btn btn-success">ADD</button></a>
		{{msg}}
		<hr>
	
	
	<table class="table table-bordered" >
		<th>ID</th><th>DEPARTMENT ID </th><th>DEPARTMENT NAME</th><th>DESCRIPTION</th>
		<tr ng-repeat="x in names">
				<td>{{x.id}}</td>
				<td>{{x.DEP_ID}}</td>
				<td>{{x.DEP_NAME}}</td>
				<td>{{x.DESCRIPTION}}</td>
				
				<!--<td><button class="btn btn-success">Edit</button></td>
				<td><button class="btn btn-warning" ng-click="delete(detail.id);">Delete</button></td>-->
			</tr>
		</table>
		  
		
	
		</div>
			</div>
				</div>
	
	
	
	
	
	
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