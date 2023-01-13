<?php

// PDO: PHP DATA OBJECTS

$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

$sql = $conn->query("SELECT * FROM students");

// PDO::FETCH_ASSOC
// PDO::FETCH_NUM
// PDO::FETCH_BOTH
// PDO::FETCH_OBJ

while ($row = $sql->fetch()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
