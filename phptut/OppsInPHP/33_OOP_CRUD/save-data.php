<?php

include 'database.php';
$obj = new database();

$sname = $_POST['sname'];
$sage = $_POST['sage'];
$scity = $_POST['scity'];

$value = ["student_name"=>$sname,"age"=>$sage,"city"=>$scity];

if($obj->insert('students',$value)){
echo "<h2>Data inserted successfully.</h2>";
}else{
    echo "<h2>Data is not inserted successfully.</h2>";
}
?>