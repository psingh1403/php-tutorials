<?php

// PDO::FETCH_COLUMN: - it fetch the data from the columns.
// PDO::FETCH_GROUP: - it creats groups for perticular columns.
// PDO::FETCH_UNIQUE: - it fetch the first unique values only.
// PDO::FETCH_KEY_PAIR: - it takes two column and make as a key value pair.
// PDO::FETCH_CLASS: - it similar to FETCH_OBJ type.

// PDO Methods
// rowCount(); : - return the number of rows
// exec();
// lastInsert();

// -------------------------------------------------------------------------
$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);


// -------------------------------------------------------------------------
// $sql = $conn->prepare("SELECT * FROM students");
// $sql->execute();
// $result = $sql->fetchAll();
// echo "<pre>";
// echo print_r($result);
// echo "</pre>";


// -------------------------------------------------------------------------
// PDO::FETCH_COLUMN: - it fetch the data from the columns.

// $sql = $conn->prepare("SELECT * FROM students");
// $sql->execute();
// // $result = $sql->fetchAll(PDO::FETCH_COLUMN,0);
// // $result = $sql->fetchAll(PDO::FETCH_COLUMN,1);
// $result = $sql->fetchAll(PDO::FETCH_COLUMN,2);
// echo "<pre>";
// echo print_r($result);
// echo "</pre>";

// -------------------------------------------------------------------------
// PDO::FETCH_GROUP: - it creats groups for perticular columns

// $sql = $conn->prepare("SELECT city,student_name,age FROM students");
// $sql->execute();

// // Grouping based on city column
// // $result = $sql->fetchAll(PDO::FETCH_GROUP);
// $result = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
// echo "<pre>";
// echo print_r($result);
// echo "</pre>";

// -------------------------------------------------------------------------
// PDO::FETCH_UNIQUE: - it fetch the first unique values only.

// $sql = $conn->prepare("SELECT city,student_name,age FROM students");
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);
// echo "<pre>";
// echo print_r($result);
// echo "</pre>";

// -------------------------------------------------------------------------
// PDO::FETCH_KEY_PAIR: - it takes two column and make as a key value pair.

// $sql = $conn->prepare("SELECT student_name,city FROM students");
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_KEY_PAIR);
// echo "<pre>";
// echo print_r($result);
// echo "</pre>";

// -------------------------------------------------------------------------
// PDO::FETCH_CLASS: - it similar to FETCH_OBJ type.

// $sql = $conn->prepare("SELECT * FROM students");
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_CLASS);
// // $result = $sql->fetchAll(PDO::FETCH_OBJ);
// echo "<pre>";
// echo print_r($result);
// echo "</pre>";

// -------------------------------------------------------------------------
// rowCount(); : - return the number of rows get affected.

$sql = $conn->prepare("SELECT * FROM students");
$sql->execute();
echo $sql->rowCount();


// -------------------------------------------------------------------------



?>
