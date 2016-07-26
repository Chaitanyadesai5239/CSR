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
	<script src="demo.js"></script>
	</head>
		
		<body ng-app="myApp" ng-controller="myCtrl">
		<div id="wrapper" >
		<?php
		include('header.php');		
		?>
		<div id="page-wrapper" style="background-color:;">
	
		<div class="container">
		<div class="jumbotron">
		<h3 style="align:center">Client Details</h3>
		</div>
		<form name="distributordetail" novalidate>
		
		
		<div class="form-group">
		<div class="row">
		<div class="col-sm-6">
		<label>Employee ID:</label>
		<input type="text" name="employeeid" ng-model="employeeid" class="form-control" required>
		</div>
		
		<div class="col-sm-6">
		<label>Department Name:</label>
		<select type="text" name="departmentname" ng-model="departmentname" class="form-control" required>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
		
		</select>
		
		</div>
		</div><br>
		
		
		<div class="row">
		<div class="col-sm-4">
		<label>First Name:</label>
		<input type="text" name="fname" ng-model="fname" class="form-control" required>
		</div>
		
		<div class="col-sm-4">
		<label>Middle Name:</label>
		<input type="text" name="mname" ng-model="mname" class="form-control" required>
		</div>
		
		<div class="col-sm-4">
		<label>Last Name:</label>
		<input type="text" name="lname" ng-model="lname" class="form-control" required>
		</div>
		</div><br>
		
		<div class="row">
		<div class="col-sm-4" >
		<label>Gender :</label><br>
		<div class="radio-inline">
        <label>
        <input type="radio" name="gender" id="optionsRadios1" value="mail" na-model="gender" >Mail
         </label>
		 </div>
		 <div class="radio-inline">
         <label>
         <input type="radio" name="gender" id="optionsRadios2" value="femail"  na-model="gender" >Femail
         </label>
        </div>
		</div>
		
		
		<div class="col-sm-4">
		<label>Birth Date:</label>
		<input type="date" name="bdate" ng-model="bdate" class="form-control" required>
		
		</div>
		</div><br>
		
		<div class="row">
		<div class="col-sm-4">
		<label>Hire Date:</label>
		<input type="date" name="hdate" ng-model="hdate" class="form-control" required>
		
		</div>
		
		
		<div class="col-sm-4"  >
		<label>Email ID:</label>
		<input type="text" name="email" ng-model="email" class="form-control" required>
		
		</div>
		
		<div class="col-sm-4" >
		<label>Mobile Number:</label>
		<input type="text" name="mobilen" ng-model="mobilen" class="form-control"  required>
		
		</div>
		
		
		
		
		</div>
		
		
		
		<hr>
		<div style="margin-left:94%">
		<button class="btn btn-primary" name="submit" ng-click="submit()">Submit</button>
		<div>{{msg}}</div>
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