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
	<script src="vendorsdetails.js"></script>

	</head>
		
	<body ng-app="myApp" ng-controller="myCtrl">
		<div id="wrapper" >
		<?php
		include('header.php');		
		?>
		<div id="page-wrapper" style="background-color:;">
	
		<div class="container">
		<div class="jumbotron">
		<h3 style="align:center">Responsible Project Detail</h3>
		</div>
		<form name="internalstakeholders" novalidate>
  
   
		<div class="form-group">
		
		
		<div class="row">
		
		<div class="col-md-2">
		<label>Vendor ID:</label>
		<input type="text" class="form-control"  name="vid" ng-model="vid">
		</div>
		
		<div class="col-md-4">
		<label>Vendor Name:</label>
		<input type="text" class="form-control"  name="vname" ng-model="vname">
		</div>
			
		<div class="col-sm-4">
		<label >Vendor Type:</label>
		<select class="form-control " name="vtype" ng-model="vtype" >
		  <option>--Select--</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			</select>
			</div>
			
		</div>	<br>
		
		<div class="row">
		<div class="col-md-12">
		<label > Address:</label>
		<input type="text" class="form-control"  name="address" ng-model="address">
		</div>
		
		</div><br>
		
		
		
		<div class="row">
		
		<div class="col-md-4">
		<label>City:</label>
		<input type="text" class="form-control"  name="city" ng-model="city">
		</div>
		
		<div class="col-md-4">
		<label>Contact Details:</label>
		<input type="text" class="form-control"  name="contactd" ng-model="contactd">
		</div>
		
		
		
		
		<div class="col-md-4">
		<label>Email ID:</label>
		<input type="text" class="form-control"  name="email" ng-model="email">
		</div>
		</div><br>
		
		
		<div class="row">
		<div class="col-md-4">
		<label>Status:</label>
		<input type="text" class="form-control"  name="status" ng-model="status">
		</div>
		
		
		<div class="col-md-4">
		<label>Compliances:</label>
		<input type="text" class="form-control"  name="compliances" ng-model="compliances">
		</div>
		</div>
		
		
	<hr>
	
    <button type="submit" class="btn btn-primary" ng-click="submit();">Submit</button>
	{{msg}}
	</div>
	
	</form>
  
    </div>
	</div>
	</div>


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