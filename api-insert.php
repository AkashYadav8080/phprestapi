
<?php

// header settings
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);


$student_name = $data['sname'];
$student_age = $data['sage'];
$student_city = $data['scity'];

// Include the connection file 
include("config.php");

// sql query for fetch data from database
$sql = "insert into students (student_name,age,city) values('{$student_name}','{$student_age}','{$student_city}')";

if(mysqli_query($conn,$sql)){
    echo json_encode(array("message"=> "Data inserted successfully", "status"=> true));
}
else{
    echo json_encode(array("message" => "Data not inserted ", "status" =>false));
}

?>