
<?php

// header settings
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Access-Control-Allow-Methods,Authorization,X-Requested-With');


$data = json_decode(file_get_contents("php://input"),true);
$student_id = $data['sid'];


// Include the connection file 
include("config.php");

// sql query for fetch data from database

$sql = "delete from students where id = {$student_id}";

if(mysqli_query($conn,$sql)){
    echo json_encode(array("message" => "Recard deleted successfully", "status" =>true));
}
else{
    echo json_encode(array("message" => "No Recard deleted", "status" =>false));
}

?>