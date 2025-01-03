
<?php

// header settings
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);


$student_id = $data['sid'];
$student_name = $data['sname'];
$student_age = $data['sage'];
$student_city = $data['scity'];

// Include the connection file 
include("config.php");

// sql query for fetch data from database

$sql = "update students set student_name='{$student_name}',age={$student_age},city='{$student_city}' where id={$student_id}";

if(mysqli_query($conn,$sql)){
    echo json_encode(array("message"=> "Data updated successfully", "status"=> true));
}
else{
    echo json_encode(array("message" => "Data not updated ", "status" =>false));
}

?>