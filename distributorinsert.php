
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo_db";

try {
	$data= json_decode(file_get_contents("php://input"));
	$distributorid = $data->distributorid;
	$distributorname = $data->distributorname;
	$distributortype = $data->distributortype;
	$address = $data->address;
	$city = $data->city;
	$contactd = $data->contactd;
	$email = $data->email;
	$status = $data->status;
	$compliances = $data->compliances;
	
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO  distributor (Distributor_ID,Distributor_Name,Distributor_Type,Address,city,Contact_Details,Email_ID,Status,Compliances)
    VALUES ('$distributorid','$distributorname', '$distributortype', '$address','$city','$contactd','$email','$status','$compliances')";
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


