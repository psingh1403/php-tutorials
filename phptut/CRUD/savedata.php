<?php

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

include('configdb.php');
$sql = "INSERT INTO `student`(`sname`, `saddrerss`, `sclass`, `sphone`) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessfull.");

header("Location: http://localhost/phptut/CRUD/index.php");
mysqli_close($conn);
?>