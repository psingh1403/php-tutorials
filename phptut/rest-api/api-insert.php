<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$first_name = $data['fname'];
$last_name = $data['lname'];
include "config.php";
$sql = "INSERT INTO student(fname,lname) VALUES('{$first_name}','{$last_name}')";
// $result = mysqli_query($conn, $sql) or die("SQL query faild");

if (mysqli_query($conn, $sql)) {
    // convert the record into json formate
    // $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // echo json_encode($output);
    echo json_encode(array('message' => 'Student Record Inserted.', 'status' => true));
} else {
    echo json_encode(array('message' => 'Student Record NOT Inserted.', 'status' => false));
}

?>