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
	

	</head>
		
		<body >
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
		<label>Distributor Name:</label>
		<input type="text" name="distributorname" ng-model="distributorname" class="form-control" required>
		</div>
		
		<div class="col-sm-6">
		<label>Distributor Type:</label>
		<select type="text" name="distributortype" ng-model="distributortype" class="form-control" required>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
		
		</select>
		
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
		
		<div class="col-sm-4" >
		<label>Contact Details:</label>
		<input type="text" name="contactd" ng-model="contactd" class="form-control"  required>
		
		</div>
		
		
		<div class="col-sm-4"  >
		<label>Email ID:</label>
		<input type="text" name="email" ng-model="email" class="form-control" required>
		
		</div>
		</div><br>
		
		<div class="row">
		<div class="col-sm-4" >
		<label>Status:</label>
		<input type="text" name="status" ng-model="status" class="form-control"  required>
		
		</div>
		
		<div class="col-sm-4" >
		<label>Compliances:</label>
		<input type="text" name="compliances" ng-model="compliances" class="form-control"  required>
		
		</div>
		
		
		</div>
		
		
		
		<hr>
		<div style="margin-left:94%">
		<button class="btn btn-primary" name="submit" >Submit</button>
		
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