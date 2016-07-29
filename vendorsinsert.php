
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo_db";

try {
	$data= json_decode(file_get_contents("php://input"));
	$vid=$data->vid;
	$vname = $data->vname;
	$vname = $data->vname;
	$vtype = $data->vtype;
	$address = $data->address;
	$city = $data->city;
	$contactd = $data->contactd;
	$email = $data->email;
	$status = $data->status;
	$compliances = $data->compliances;
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO  vendors (Vendor_ID,Vendor_Name,Vendor_Type,Address,City,Contact_Details,Email_ID,Status,Compliances,DEL_VEN)
    VALUES ('$vid','$vname','$vtype','$address','$city','$contactd','$email','$status','$compliances',1)";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	
$conn = null;
?>


