<?php 


// mysqli Procedural
// Mysqli Object-oriented
// PDO

// -----------------------------------------------------

// Procedural Methods:

// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_row()
// mysqli_fetch_all()
// mysqli_fetch_field()

// -----------------------------------------------------

// OOP Methods :

// $result = $conn->query(SQL Query);

// $result->fetch_assoc()
// $result->fetch_array()
// $result->fetch_row()
// $result->fetch_all()
// $result->fetch_field()

// -----------------------------------------------------

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
        
		echo "Id: {$row["id"]} - Name: {$row["student_name"]} - Age: {$row["age"]} <br>";
	}
}else{
	echo "No result found.";
}

$conn->close();

?>