<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$studentid = $data['sid'];
$first_name = $data['fname'];
$last_name = $data['lname'];
include "config.php";
$sql = "UPDATE student SET fname='{$first_name}',lname='{$last_name}' WHERE sid = {$studentid}";
// $result = mysqli_query($conn, $sql) or die("SQL query faild");

if (mysqli_query($conn, $sql)) {
    // convert the record into json formate
    // $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // echo json_encode($output);
    echo json_encode(array('message' => 'Student Record Updated.', 'status' => true));
} else {
    echo json_encode(array('message' => 'Student Record NOT Updated.', 'status' => false));
}

?>

