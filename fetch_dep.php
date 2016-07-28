<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ngo_db";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "SELECT DEP_ID, DEP_NAME FROM departments";
 
		$stmt = $conn->prepare($query);
		$stmt->execute();
		 
		$userData = array();
		 
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			$userData[] = $row;
		}
		 
		echo json_encode($userData);
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	//echo $result;
?>