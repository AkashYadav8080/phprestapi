
<?php

// header settings
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');


$data = json_decode(file_get_contents("php://input"),true);
$student_id = $data['sid'];

// $student_id = isset($_GET['sid']) ? $_GET['sid'] : die();


// Include the connection file 
include("config.php");

// sql query for fetch data from database

$sql = "select * from students where id = {$student_id}";

$result = mysqli_query($conn,$sql) or die("SQL query failed");


if(mysqli_num_rows($result)>0){

    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);

    echo json_encode($output);
}
else{
    echo json_encode(array("message" => "No Recard found", "status" =>false));
}

?>