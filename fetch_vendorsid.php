<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ngo_db";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "SELECT MAX(ID) as maxID FROM vendors";
 
		$stmt = $conn->prepare($query);
		$stmt->execute();
		 
		$test = $stmt->fetch(PDO::FETCH_ASSOC);
		$id = (int)$test['maxID'];
		
		echo"V".($id+1);
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
?>