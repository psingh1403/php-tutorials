<?php

// PDO with Prepate() Method

$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

// -------------------------------------------------------------------------

// $city = "Goa";

// $sql = $conn->prepare("SELECT * FROM students WHERE city = ?");
// $sql->bindParam(1,$city);
// $sql->execute();

// $result = $sql->fetchAll(PDO::FETCH_NUM);

// if(count($result)){
//     foreach($result as $row){
//         echo $row[1]."<br>";
//     }
// }else{
//     echo "No Record found.";
// }

// -------------------------------------------------------------------------

// PDO::PARAM_INT
// PDO::PARAM_STR
// PDO::PARAM_LOB
// PDO::PARAM_BOOL
// PDO::PARAM_NULL

// $city = "Goa";
// $id = 2;
// $sql = $conn->prepare("SELECT * FROM students WHERE city = ? AND id = ?");

// Method: 1
// Bind the values of '?' using bindParam function
// $sql->bindParam(1,$city,PDO::PARAM_STR);
// $sql->bindParam(2,$id,PDO::PARAM_INT);

// Method: 2
// Bind the values of '?' using bindValue function
// $sql->bindValue(1,$city,PDO::PARAM_STR);
// $sql->bindValue(2,$id,PDO::PARAM_INT);

// $sql->execute();

// Method: 3
// Bind the values of '?' using execute function
// $sql->execute(array($city, $id));

// Method: 4
// $sql = $conn->prepare("SELECT * FROM students WHERE city = :city AND id = :id");
// $sql->bindValue(':city' ,$city,PDO::PARAM_STR);
// $sql->bindValue(':id',$id,PDO::PARAM_INT);
// $sql->execute();

// Method: 5
// $sql = $conn->prepare("SELECT * FROM students WHERE city = :city AND id = :id");
// $sql->execute(array(':city' => $city,':id' => $id));

// $result = $sql->fetchAll(PDO::FETCH_NUM);

// if (count($result)) {
//     foreach ($result as $row) {
//         echo $row[1] . "<br>";
//     }
// } else {
//     echo "No Record found.";
// }


// -------------------------------------------------------------------------

// $name = "Pushpendra singh";
// $age = "24";
// $city = "Noida";

// $sql = $conn->prepare("INSERT INTO  students (student_name,age,city) VALUES (?,?,?)");
// $sql->execute(array($name,$age,$city));
