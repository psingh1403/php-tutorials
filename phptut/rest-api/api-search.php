<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Search using POST method
// $data = json_decode(file_get_contents("php://input"),true);
// $search_value = $data['search'];

// Search using GET method
$search_value = isset($_GET['search']) ? $_GET['search'] : die();

include "config.php";
$sql = "SELECT * FROM student WHERE fname LIKE '%{$search_value}'";
$result = mysqli_query($conn, $sql) or die("SQL query faild");

if (mysqli_num_rows($result) > 0) {
    // convert the record into json formate
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array('message' => 'No search found.', 'status' => false));
}

?>
