<?php

$stu_id = $_GET['stuid'];
include('configdb.php');
$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessfull.");

header("Location: http://localhost/phptut/CRUD/index.php");
mysqli_close($conn);
?>