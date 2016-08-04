
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo_db";

try {
	$data= json_decode(file_get_contents("php://input"));
	$PROJECT_ID = $data->pid;
	$date = $data->date;
	$activityname = $data->activityname;
	$activitydetails = $data->activitydetails;
	$moneyspent = $data->moneyspent;
	$comment = $data->comment;
	$eid = $data->eid;
	$images = $data->images;
	$video = $data->video;
	
	
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO  responsible_projects_details (PROJECT_ID,DATE,ACTIVITY_NAME,ACTIVITY_DETAILS,MONEY_SPENT,EMPLOYEE,IMAGES,VIDEOS,COMMENTS)
    VALUES ('$PROJECT_ID','$date', '$activityname', '$activitydetails','$moneyspent','$eid','$images','$video','$comment')";
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


