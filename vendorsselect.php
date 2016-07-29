
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id,Vendor_ID,Vendor_Name,Vendor_Type,Address,City,Contact_Details,Email_ID,Status,Compliances FROM vendors WHERE DEL_VEN = 1"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    echo json_encode($result);
    }

	catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
	}		
	$conn = null;
?>

