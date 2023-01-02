<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection faild");
$sql = "INSERT INTO `student`(`fname`, `lname`) VALUES ('{$first_name}','{$last_name}')";
// $result = mysqli_query($conn, $sql) or die("sql query faild");

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}

?>