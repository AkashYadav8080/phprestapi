
<?php

// header settings
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');

// use in post request
//$data = json_decode(file_get_contents("php://input"),true);
//$search_value = $data['search'];

// use in get request
$search_value = isset($_GET['search']) ? $_GET['search'] : die();

// Include the connection file 
include("config.php");

// sql query for fetch data from database

$sql = "select * from students where student_name like '%{$search_value}%'";

$result = mysqli_query($conn,$sql) or die("SQL query failed");


if(mysqli_num_rows($result)>0){

    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);

    echo json_encode($output);
}
else{
    echo json_encode(array("message" => "No Search found", "status" =>false));
}

?>