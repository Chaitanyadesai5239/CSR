
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo_db";

try {
	$data= json_decode(file_get_contents("php://input"));
	$pid = $data->pid;
	$projectname = $data->projectname;
	$projecttype = $data->projecttype;
	$pdate = $data->pdate;
	$clientname = $data->clientname;
	$start = $data->start;
	$end = $data->end;
	$location = $data->location;
	$goal = $data->goal;
	$consultantname = $data->consultantname;
	$comment = $data->comment;
	
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO  responsible_projects_header (PROJECT_ID,PROJECT_NAME,PROJECT_TYPE,PROJECT_CREATED_DATE,CLIENT_ID,TIMELINE_START,TIMELINE_END,LOCATION,GOAL,COUNSULTANT_ID,COMMENTS)
    VALUES ('$pid','$projectname', '$projecttype', '$pdate','$clientname','$start','$end','$location','$goal','$consultantname','$comment')";
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


