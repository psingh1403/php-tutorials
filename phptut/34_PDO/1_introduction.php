<?php

// PDO: PHP DATA OBJECTS

$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

// $sql = $conn->query("SELECT * FROM students");

// PDO::FETCH_ASSOC: - fetch associative array
// PDO::FETCH_NUM: - fetch indexed array
// PDO::FETCH_BOTH: - fetch both associative and indexed array
// PDO::FETCH_OBJ: - fetch Object array

// ---------------------------------------------------------------------------------

// while ($row = $sql->fetch()) {
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
// }

// ---------------------------------------------------------------------------------

// while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
//     echo "{$row['id']} - {$row['student_name']} - {$row['city']} <br>";
// }

// ---------------------------------------------------------------------------------

// while ($row = $sql->fetch(PDO::FETCH_NUM)) {
//     echo "{$row[0]} - {$row[1]} - {$row[2]} <br>";
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
// }

// ---------------------------------------------------------------------------------

// $sql = $conn->query("SELECT * FROM students WHERE city = 'Goa'");

// while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
//     echo "{$row->id} - {$row->student_name} - {$row->city} <br>";
//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";
// }

// ---------------------------------------------------------------------------------

// $sql = $conn->query("SELECT * FROM students WHERE city = 'Goa'");
// $result = $sql->fetchAll();

// echo "<pre>";
// print_r($result);
// echo "</pre>";

// ---------------------------------------------------------------------------------

// $sql = $conn->query("SELECT * FROM students WHERE city = 'Goa'");
// $result = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);
// echo "</pre>";

// ---------------------------------------------------------------------------------

$sql = $conn->query("SELECT * FROM students");
$result = $sql->fetchAll(PDO::FETCH_NUM);

if(count($result)){
    foreach($result as $row){
        echo $row[1]."<br>";
    }
}else{
    echo "No Record found.";
}

// ---------------------------------------------------------------------------------