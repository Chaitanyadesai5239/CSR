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
		<form name="externalstakeholders" novalidate>
		
		
		<div class="form-group">
		<div class="row">
		<div class="col-sm-6">
		<label>Project Name:</label>
		<select type="text" name="departmentname" ng-model="departmentname" class="form-control" required>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
		
		</select>
		</div>
		</div>
		
		<div class="row">
		<div class="col-sm-6">
		<label>Client Name:</label>
		<select type="text" name="departmentname" ng-model="departmentname" class="form-control" required>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
		
		</select>
		
		</div>
		</div><br>
		
		
		<div class="row">
		<div class="col-sm-12">
		<label>Government Authority:</label>
		<input type="text" name="fname" ng-model="fname" class="form-control" required>
		</div>
		</div><br>
		
		<div class="row">
		
		<div class="col-sm-1">
		<label>SrNO:</label>
		<input type="text" name="srno" ng-model="srno" class="form-control" required>
		</div>
		
		<div class="col-sm-2">
		<label>Advisor:</label>
		<input type="text" name="advisor" ng-model="advisor" class="form-control" required>
		</div>
		
		<div class="col-sm-2">
		<label>Investors:</label>
		<input type="text" name="investors" ng-model="investors" class="form-control" required>
		</div>
		
		<div class="col-sm-2">
		<label>Stock Brockers:</label>
		<input type="text" name="stockb" ng-model="stockb" class="form-control" required>
		</div>
		
		<div class="col-sm-2">
		<label>Independent Directors:</label>
		<input type="text" name="fname" ng-model="fname" class="form-control" required>
		</div>
		
		
		<div class="col-sm-3">
		<label style="margin-left:25px">Action:</label><br>
		<div class="col-sm-6">
		<button name="add"  class="form-control" required>Add</button>
		</div>
		<div class="col-sm-6">
		<button  name="remove"  class="form-control" required>Remove</button>
		</div>
		</div>
		</div>
		</div>
		
		
		
		
		
		
		
		
		
		<hr>
		<div style="margin-left:94%">
		<button class="btn btn-primary" name="submit" >Submit</button>
		
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