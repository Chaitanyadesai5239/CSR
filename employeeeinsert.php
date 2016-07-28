
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo_db";

try {
	$data= json_decode(file_get_contents("php://input"));
	$EMP_ID = ($data->employeeid);
	$DEP_ID = ($data->depid);
	$First_Name = ($data->fname);
	$Middle_Name = ($data->mname);
	$Last_Name = ($data->lname);
	$gender = ($data->gender);
	$birth_date = ($data->bdate);
	$hire_date = ($data->hdate);
	$email_id = ($data->email);
	$mobile_no = ($data->mobilen);
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO employee_details (EMP_ID,DEP_ID,First_Name,Middle_Name,Last_Name,gender,birth_date,hire_date,email_id,mobile_no)
    VALUES ('$EMP_ID', $DEP_ID ,'$First_Name', '$Middle_Name','$Last_Name','$gender','$birth_date','$hire_date','$email_id','$mobile_no')";
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


