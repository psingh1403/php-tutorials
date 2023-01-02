<?php 

// mysqli_affected_rows($conn): how many rows get affected

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

// $sql = "SELECT * FROM student";
// $result = mysqli_query($conn, $sql) or die("Query Failed");
// echo "Total rows: " . mysqli_affected_rows($conn);

// $sql = "SELECT * FROM student WHERE lname = 'Khan'";
// $result = mysqli_query($conn, $sql) or die("Query Failed");
// echo "Total rows: " . mysqli_affected_rows($conn);

// $sql = "UPDATE student SET lname = 'Malik' WHERE lname = 'khan'";
// $result = mysqli_query($conn, $sql) or die("Query Failed");
// echo "Total rows: " . mysqli_affected_rows($conn);
?>