<?php

$servername="localhost";
	$username="root";
	$password="";
	$db="master";

	try
	{
	$con=new pdo("mysql:host=$servername;dbname=$db",$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
	echo "error".$e.getMessage();
	exit();
	}
	
		$id=$_GET['id'];
		$result=$con->prepare("SELECT * FROM suppliermst WHERE id= :userid");
		$result->bindParam(':userid',$id);
		$result->execute();
		for($i=0;$row=$result->fetch();$i++){
?>
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
			<div class="jumbotron" style="background-color:rgba(255,0,0,0.3);">
			<h1>My First Bootstrap Page</h1>
			<p>This is some text.</p> 
			</div>

                <h2 align="center">supplier Master</h2>
				
			
				
  <form   role="form" action="edit.php" method="POST">
  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>" />
  
    <div class="form-group" ><br>
      <label  >SUPID:</label><br>
	 <div class="col-xs-2"> <input type="text" id="id1" class="form-control" placeholder="Enter SupplierID" name="usupid" value="<?php echo $row['supid'] ?>"></div><br>
	 </div><br>
	
     
	  
	<div class="form-group has-warning ">
      <label for="nm" class="control-label">Name:</label>
     <div > <input type="text" id="nm" class="form-control" placeholder="Enter Name" name="uname" value="<?php echo $row['name'] ?>"></div>
	<p class="help-block"> Enter the name with capital letter</p>
	
    </div>
	
	    <div class="form-group has-warning ">
      <label for="address" class="control-label">Address:</label><br>
      <textarea class="form-control" id="add" placeholder="Enter address" rows="6" cols="30" name="uaddress" value="<?php echo $row['address'] ?>"></textarea>
	 <p class="help-block"> Enter the Address </p>
    </div>
	
	<div class="form-group has-warning ">
      <label for="mail" class="control-label">Email:</label><br>
      <div class="col-xs-4"><input type="text" class="form-control" id="mail" placeholder="Enter email" name="uemail" value="<?php echo $row['email'] ?>"></div><br><br>
	 <p class="help-block"> Enter the Email  Correctly </p>
    </div>
      
    
	<div class="form-group">
	<div class="form-group">
      <label for="No"class="control-label">Contactno:</label><br>
    <div class="col-xs-2"><input type="text" class="form-control" id="NO" placeholder="Enter contactno" name="ucontactno" value="<?php echo $row['contactno'] ?>"></div><br><br>
	<p class="help-block"> Enter the contactno </p>
    </div>
	
	<hr>
	
    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
	<button type="submit" class="btn btn-success">Reset</button><br><br>
	
	<hr>
	<?php
	
	
		}
	?>
	
	 </form>
	 
	 <?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="master";

	try
	{
	$con=new pdo("mysql:host=$servername;dbname=$db",$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
	echo "error".$e.getMessage();
	exit();
	}
	
	
		$id=$_POST['id'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$contactno=$_POST['contactno'];
		
		$sql="update suppliermst set supid='$supid',name='$name',address='$address',email='$email',contactno='$contactno'";
		$q=$db->prepare($sql);
		
		header("location:Supplier.php");
			
	
	?>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
  

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
	
	<footer class="footer" style="background-color:#173e43;">
      <div class="container">
        <p class="text-muted" style="margin-left:5px">Place sticky footer content here.</p>
      </div>
    </footer>
	
	

</body>

</html>
