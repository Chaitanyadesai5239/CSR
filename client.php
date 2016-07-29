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
	<script src="client.js"></script>

	</head>
		
		<body ng-app="myApp" ng-controller="myCtrl" ng-init="loadclientid()">
			<div id="wrapper" >
				<?php
					include('header.php');		
		?>
		<div id="page-wrapper" style="background-color:;">
	
		<div class="container">
		<div class="jumbotron">
		<h3 style="align:center">Client Details</h3>
		</div>
		<form name="clientdetails" novalidate>
		
		
		<div class="form-group">
		<div class="row">
		<div class="col-sm-2">
		<label>Client ID:</label>
		<input type="text" name="clientid" ng-model="clientid" class="form-control" required readonly>
		</div>
		
		<div class="col-sm-10">
		<label>Client Name:</label>
		<input type="text" name="clientname" ng-model="clientname" class="form-control" required>
		
		</div>
		</div><br>
		
		
		<div class="row">
		<div class="col-sm-12">
		<label>Address:</label>
		<input type="text" name="address" ng-model="address" class="form-control" required>
		</div>
		</div><br>
		
		<div class="row">
		<div class="col-sm-4">
		<label>City:</label>
		<input type="text" name="city" ng-model="city" class="form-control" required>
		
		</div>
		
		<div class="col-sm-8" >
		<label>Contact Person:</label>
		<input type="text" name="contactp" ng-model="contactp" class="form-control"  required>
		
		</div>
		</div><br>
		
		<div class="row">
		<div class="col-sm-4" >
		<label>Phone Number:</label>
		<input type="text" name="phonen" ng-model="phonen" class="form-control"  required>
		
		</div>
		
		<div class="col-sm-4" >
		<label>Mobile Number:</label>
		<input type="text" name="mobilen" ng-model="mobilen" class="form-control"  required>
		
		</div>
		
		<div class="col-sm-4"  >
		<label>Email ID:</label>
		<input type="text" name="email" ng-model="email" class="form-control" required>
		
		</div>
		</div>
		
		
		
		<hr>
		<div style="margin-left:94%">
		<button class="btn btn-primary" name="submit" ng-click="submit();">Submit</button>
		{{msg}}
		
		</div>
		</div>
		
		</form>
		</div>
		</div>
            <!-- /.container-fluid -->

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