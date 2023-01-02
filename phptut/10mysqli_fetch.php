<?php

// echo "1. mysqli_fetch_assoc()"."<br>";
// echo "2. mysqli_fetch_array()"."<br>";
// echo "3. mysqli_fetch_row()"."<br>";
// echo "4. mysqli_fetch_all()"."<br>";
// echo "5. mysqli_fetch_field()"."<br>";

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

// mysqli_fetch_assoc($result): - it fatch the associative array and it fatch one row at a time.
// $row = mysqli_fetch_assoc($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

// Print the values of the associative array.
// echo $row['fname'] . " " . $row['lname'] . "<br><br>";

/*------------Fetch Associative -------------- */
// Print all values of stutent table using the associative array.
// while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['fname'] . " " . $row['lname'] . "<br>";
// }

/* ------------Fetch ROW -------------- */
// mysqli_fetch_row($result): - it fatch only one data at a time and convert into indexed array

// $row = mysqli_fetch_row($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

// echo $row[1] . " " . $row[2] . "<br>";

// while ($row = mysqli_fetch_row($result)) {
//     echo $row['1'] . " " . $row['2'] . "<br>";
// }

/* ------------Fetch Array -------------- */
// mysqli_fetch_array($result): - it fatch only one data at a time and it returns both indexed and associative array.

// $row = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

// echo $row[1] . " " . $row[2]. "<br>";

// echo $row["fname"] . " " . $row["lname"]. "<br>";

/* ------------Fetch Only Associative Array -------------- */
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

/* ------------Fetch Only Indexed Array -------------- */
// $row = mysqli_fetch_array($result,MYSQLI_NUM);
// echo "<pre>";
// print_r($row);
// echo "</pre>"

/* ------------Fetch Both the Array -------------- */
// $row = mysqli_fetch_array($result,MYSQLI_BOTH);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

/* ------------ Fetch All-------------- */
// mysqli_fetch_all($result): - it fatch the complete data in the form of multi-dimentional associative array
// $row = mysqli_fetch_all($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

// $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

// $row = mysqli_fetch_all($result,MYSQLI_NUM);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

// $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
// echo "<pre>";
// print_r($row);
// echo "</pre>";
// foreach($row as $data) {
//    echo $data['sid']. " " .$data['fname'] . $data['lname'] . " ". "<br>";
// }

/* ------------See the Columns information of Database Tables -------------- */
// $row = mysqli_fetch_field($result);
// echo "<pre>";
// print_r($row);
// echo "</pre>";

// while ($fieldinfo = mysqli_fetch_field($result)) {
//     echo "<pre>";
//     print_r($fieldinfo);
//     echo "</pre>";
// }

/* ------------Only Works with Object Method -------------- */
while ($fieldinfo = mysqli_fetch_field($result)) {
    echo $fieldinfo->name . "-" . $fieldinfo->max_length . "<br>";
}
?>