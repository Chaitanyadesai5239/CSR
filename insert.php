
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_ngo";

try {
	$data= json_decode(file_get_contents("php://input"));
	$EMP_ID = ($data->EMP_ID);
	$First_Name = ($data->First_Name);
	$Middle_Name = ($data->Middle_Name);
	$Last_Name = ($data->Last_Name);
	$gender = ($data->gender);
	$birth_date = ($data->birth_date);
	$hire_date = ($data->hire_date);
	$email_id = ($data->email_id);
	$mobile_no = ($data->mobile_no);
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO employee_details (EMP_ID,First_Name,Middle_Name,Last_Name,gender,birth_date,hire_date,email_id,mobile_no)
    VALUES ($EMP_ID, '$First_Name', '$Middle_Name','$Last_Name','$gender','$birth_date','$hire_date','$email_id','$mobile_no')";
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


