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
		<h3 style="align:center">Responsible Project Detail</h3>
		</div>
		<form name="internalstakeholders" novalidate>
  
   
		<div class="form-group">
		
		<div class="row">
		<div class="col-sm-5">
		<label>Project Name:</label>
		<select type="text" name="projectname" ng-model="projectname" class="form-control" required>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
		
		</select>
		</div>
			
		<div class="col-sm-2">
		<label > Date:</label>
		<input type="date" class="form-control" placeholder="Enter Type" name="date">
		</div>
		
		<div class="col-sm-5">
      <label>Activity Name:</label>
		<input type="text" class="form-control"  name="date">
		</div>
		</div><br>
		
		
		
		<div class="row">
		<div class="col-md-5">
		<label>Activity Details:</label>
		<textarea type="text" class="form-control" name="activitydetails"></textarea>
		</div>
		
		<div class="col-md-4">
		<label>Money Spent:</label>
		<input type="text" class="form-control"  name="date">
		</div>
	
		</div><br>
		
		
		<div class="row">
		<div class="col-md-6">
		<label>Comment:</label>
		<textarea type="text" class="form-control" name="activitydetails" rows=6></textarea>
		</div>
		</div><br>
		
		<div class="row">
		<div class="col-xs-4">
		<label >Employee:</label>
		<select class="form-control "  >
		  <option>--Multiple Select--</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			</select>
			</div>
			
		<div class="col-xs-4">
		<label >Images:</label>
		<select class="form-control "  >
		<option>--Multiple image upload--</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			</select>
			</div>
			
		<div class="col-xs-4">
		<label >Video:</label>
		<select class="form-control "  >
		<option>--Multiple video upload--</option>
			<option>#</option>
			<option>#</option>
			<option>#</option>
			</select>
			</div>
			</div>


	 
	<hr>
	
    <button type="submit" class="btn btn-primary">Submit</button>
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