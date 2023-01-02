<?php
// header
// It tells this file return the data in json formate
header('Content-Type: application/json');

header('Access-Control-Allow-Origin: *');

include "config.php";
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("SQL query faild");

if (mysqli_num_rows($result) > 0) {
    // convert the record into json formate
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array('message' => 'No record found.', 'status' => false));
}

?>
