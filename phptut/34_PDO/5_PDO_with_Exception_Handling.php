<?php

// Display the error if driver(mysql), database name(dbname), username ($username) and password($password) is in correct

// try {
//     $db_name = "mysql:host=localhost;dbname=testing";
//     $username = "root";
//     $password = "";

//     $conn = new PDO($db_name, $username, $password);
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

// -----------------------------------------------------------------

// Display the error if error in sql command.

try {
    $db_name = "mysql:host=localhost;dbname=testing";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);

    $sql = $conn->prepare("SELECT * FROM students");
    $sql->execute();

    $error = $sql->errorInfo();
    if ($error[1]) {
        echo $error[2];
    } else {
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
