<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ngo_db";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "SELECT DEP_ID, FIRST_NAME, LAST_NAME FROM employee_details";
 
		$stmt = $conn->prepare($query);
		$stmt->execute();
		 
		$userData = array();
		$temp = array();
		 
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			$firstName = $row['FIRST_NAME'];
			$lastName = $row['LAST_NAME'];
			$id = (int)$row['DEP_ID'];
			
			$query1 = "SELECT DEP_NAME FROM departments WHERE DEP_ID = $id";
			$stmt1 = $conn->prepare($query1);
			$stmt1->execute();
			while($row1=$stmt1->fetch(PDO::FETCH_ASSOC)){
				$dep = $row1['DEP_NAME'];
			}
			
			$temp['FIRST_NAME']=$firstName;
			$temp['LAST_NAME']=$lastName;
			$temp['DEP_NAME']=$dep;
			
			$userData[] = $temp;
		}
		
		echo json_encode($userData);
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	
?>