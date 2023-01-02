<?php

$student_id = $_POST["id"];
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection faild");
$sql = "DELETE FROM `student` WHERE sid={$student_id}";
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}

?>