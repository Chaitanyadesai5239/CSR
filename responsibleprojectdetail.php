<!DOCTYPE html>
<html lang="en">

<head>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="responsibleprojectdetail.js"></script>
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
	

	</head>
		
		<body ng-app="myApp" ng-controller="myCtrl" ng-init="loadresponsibleid();">
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
		<div class="col-sm-2">
		<label>Project ID:</label>
		<input type="text" name="pid" ng-model="pid" class="form-control" required readonly>
		</div>
		
		<div class="col-sm-6">
		<label>Project Name:</label>
		<input type="text" name="projectname" ng-model="projectname" class="form-control" required>
		</div>
		
		<div class="col-sm-4">
		<label>Project Type:</label>
		<select type="text" name="projecttype" ng-model="projecttype" class="form-control" required>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
		
		</select>
		</div>
		</div><br>
		
		
		<div class="row">
		<div class="col-sm-4">
		<label >Project Creation Date:</label>
		<input type="date" name="pdate" ng-model="pdate" class="form-control" >
		</div>
		
		<div class="col-sm-8">
		<label>Client Name:</label>
		<select type="text" name="clientname" ng-model="clientname" class="form-control" ng-option="x.Client_Name for x in client" required>
			
		
		</select>
		</div>
		</div><br>
		
		
		<div class="row">
		<div class="col-sm-8">
		<label>Time Line:</label><br>
			<div class="col-sm-3">
		<label>start:</label>
			<input type="date" name="start" ng-model="start" class="form-control" required>
			</div>
			<div class="col-sm-3">
		<label>End:</label>
			<input type="date" name="end" ng-model="end" class="form-control" required>
			</div>
			</div><br>
		
		<div class="col-sm-4">
		<label>Location:</label><br>
		<input type="text" name="location" ng-model="location" class="form-control" required>
		</div>
		</div><br>
		
		<div class="row">
		<div class="col-sm-4">
		<label>Goal:</label>
		<input type="text" name="goal" ng-model="goal" class="form-control" required>
		</div>

		<div class="col-sm-6">
		<label>Consultant Name:</label>
		<select type="text" name="consultantname" ng-model="consultantname" class="form-control" required>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
		
		</select>
		</div>
		
		<div class="col-sm-12">
		<label>Comment:</label>
		<input type="text" name="comment" ng-model="comment" class="form-control" required>
		</div>
		</div>
		
		
		</div>
		
		
		
		<hr>
		<div style="margin-left:94%">
		<button class="btn btn-primary" name="submit" ng-click="submit();">Submit</button>
		{{msg}}
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