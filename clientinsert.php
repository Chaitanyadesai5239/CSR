
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo_db";

try {
	$data= json_decode(file_get_contents("php://input"));
	$clientid = $data->clientid;
	$clientname = $data->clientname;
	$address = $data->address;
	$city = $data->city;
	$contactp = $data->contactp;
	$phonen = $data->phonen;
	$mobilen = $data->mobilen;
	$email = $data->email;
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO  client_details (Client_ID,Client_Name,address,CITY,contact_person,phone_number,mobile_number,EMAIL_ID,DEL_CLI)
    VALUES ('$clientid', '$clientname', '$address','$city','$contactp','$phonen','$mobilen','$email',1)";
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


