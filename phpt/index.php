<?php
session_start();

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo 'Pushpendra singh';
    ?>
</body>
</html> -->

<!---------------------------------------- Video 21: Get and Post request in php --------------------------------------------------->
<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">GET/POST</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $email = $_POST['email'];
    //     $pass = $_POST['password'];
    //     echo '<div class="alert alert-warning" role="alert">
    //     Email:' . $email . ' and  Password:' . $pass . '
    //   </div>';
    // }
    
    ?>
    <div class="container">
        <form action="/phpt/index.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" name="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html> -->

<!---------------------------------------- Video 24: connecting to mysql database in php --------------------------------------------------->
<?php
// echo "Welcome to the stage where we are ready to get connected to a database <br>";
/* 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/

// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";

// Create a connection
// $conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
// if (!$conn) {
//     die("Sorry we failed to connect: " . mysqli_connect_error());
// } else {
//     echo "Connection was successful";
// }

?>

<!---------------------------------------- Video 25: Creating a MySQL Database using php --------------------------------------------------->
<?php
// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";

// Create a connection
// $conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
// if (!$conn) {
//     die("Sorry we failed to connect: " . mysqli_connect_error());
// } else {
//     echo "Connection was successful<br>";
// }

// Create a db
// $sql = "CREATE DATABASE dbHarry";
// $result = mysqli_query($conn, $sql);

// Check for the database creation success
// if ($result) {
//     echo "The db was created successfully!<br>";
// } else {
//     echo "The db was not created successfully because of this error ---> " . mysqli_error($conn);
// }

?>

<!---------------------------------------- Video 26: Creating a Table in MySQL using php --------------------------------------------------->
<?php
// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "practice";

// Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
// if (!$conn) {
//     die("Sorry we failed to connect: " . mysqli_connect_error());
// } else {
//     echo "Connection was successful<br>";
// }

// Create a table in the db
// $sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
// $result = mysqli_query($conn, $sql);

// Check for the table creation success
// if ($result) {
//     echo "The table was created successfully!<br>";
// } else {
//     echo "The table was not created successfully because of this error ---> " . mysqli_error($conn);
// }

?>

<!---------------------------------------- Video 26: Creating a Table in MySQL using php --------------------------------------------------->
<?php

// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "practice";

// Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
// if (!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful<br>";
// }

// Variables to be inserted into the table
// $name = "Vikrant";
// $de?stination = "Russia";

// Sql query to be executed
// $sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
// $result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
// if($result){
//     echo "The record has been inserted successfully successfully!<br>";
// }
// else{
//     echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
// }
?>

<!----------------- Video 28: Creating a Bootstrap Form and Saving Data Into MySQL DataBase Using MySQLi ---------------------->

<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Get/Post</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/cwhphp/21_Get_Post.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav> -->

<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $desc = $_POST['desc'];

// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "practice";

// Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
// if (!$conn) {
//     die("Sorry we failed to connect: " . mysqli_connect_error());
// } else {
// Submit these to a database
// Sql query to be executed 
// $sql = "INSERT INTO `contactus` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
// $result = mysqli_query($conn, $sql);

// if ($result) {
//     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//   <strong>Success!</strong> Your entry has been submitted successfully!
//   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//     <span aria-hidden="true">×</span>
//   </button>
// </div>';
// } else {
// echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
//             echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
//           <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
//           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//             <span aria-hidden="true">×</span>
//           </button>
//         </div>';
//         }
//     }
// }
?>

<!-- <div class="container mt-3">
        <h1>Contact us for your concerns</h1>
        <form action="/phpt/index.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html> -->

<!-- ----------------------------Video 29: Selecting and Displaying Data From MySQL Using MySQLi--------------------------- -->
<?php
// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "practice";

// Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
// if (!$conn) {
//     die("Sorry we failed to connect: " . mysqli_connect_error());
// } else {
//     echo "Connection was successful<br>";
// }

// $sql = "SELECT * FROM `phptrip`";
// $result = mysqli_query($conn, $sql);

// It will Find the total number of records in the database
// $num = mysqli_num_rows($result);
// echo $num;
// echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
// mysqli_fetch_assoc($result) //It will return the associative array and it always return the next row.
// if ($num > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
// echo "<br>";

// We can fetch in a better way using the while loop
// while ($row = mysqli_fetch_assoc($result)) {
// echo var_dump($row);
//         echo $row['sno'] . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
//         echo "<br>";
//     }
// }
?>

<!-- ----------------------------Video 30: Updating Records in PHP & Where Clause --------------------------- -->
<?php
// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "practice";

// Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
// if (!$conn) {
//     die("Sorry we failed to connect: " . mysqli_connect_error());
// } else {
//     echo "Connection was successful<br>";
// }


// $sql = "SELECT * FROM `phptrip` WHERE `dest`='Bihar'";
// $result = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the database
// $num = mysqli_num_rows($result);
// echo $num . " records found in the DataBase<br>";
// $no = 1;
// if ($num > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo $no . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
//         echo "<br>";
//         $no = $no + 1;
//     }
// }

// Usage of WHERE Clause to Update Data
// $sql = "UPDATE `phptrip` SET `name` = 'FromBihar' WHERE `dest` = 'Bihar'";
// $result = mysqli_query($conn, $sql);
// echo var_dump($result);
// $aff = mysqli_affected_rows($conn);
// echo "<br>Number of affected rows: $aff <br>";
// if ($result) {
//     echo "We updated the record successfully";
// } else {
//     echo "We could not update the record successfully";
// }
?>

<!-- ----------------------------Video 31: Deleting Records in PHP & Limit Clause --------------------------- -->
<?php
// Connecting to the Database
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "practice";

// Create a connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
// if (!$conn) {
//     die("Sorry we failed to connect: " . mysqli_connect_error());
// } else {
//     echo "Connection was successful<br>";
// }


// $sql = "DELETE FROM `phptrip` WHERE `dest` = 'Russia' LIMIT 13";
// $result = mysqli_query($conn, $sql);
// $aff = mysqli_affected_rows($conn);
// echo "<br>Number of affected rows: $aff <br>";

// if ($result) {
//     echo "Delete successfully";
// } else {
//     $err = mysqli_error($conn);
//     echo "Not Delete successfully due to this error --> $err";
// }

?>

<!-- ----------------------------Video 33: Include and Require in PHP --------------------------- -->
<?php

// include '_dbconnect1.php';
// require '_dbconnect.php';


// $sql = "SELECT * FROM `phptrip`";
// $result = mysqli_query($conn, $sql);

// Find the number of records returned
// $num = mysqli_num_rows($result);
// echo $num;
// echo " records found in the DataBase<br>";
// while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['sno'] . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
//     echo "<br>";
// }
?>

<!-- ============================================ Working with Files ============================================================= -->

<!-- ----------------------------Video 34: File I/O in PHP in Hindi --------------------------- -->
<?php
// $a = readfile("myfile.txt");
// echo $a;

// readfile("myfile.txt");
// readfile("1.jpg");
// readfile("file.html");
?>

<!-- ----------------------------Video 35: fopen(), fread() & fclose() in PHP --------------------------- -->
<?php

// $fptr = fopen("myfile.txt", "r");
// echo var_dump($fptr);
// if (!$fptr) {
//     die("Unable to open this file.Please enter a valid filename");
// }
// $content = fread($fptr, filesize("myfile.txt"));
// fclose($fptr);
// echo $content;

?>

<!-- ----------------------------Video 38: Setting Cookies & $_COOKIE super global in PHP --------------------------- -->
<?php
// echo "Welcome to the world of cookies<br>";
// Syntax to set a cookie
// echo time();
// setcookie ( name , value ,expiration time , path = "");
// setcookie("category", "Books", time() + 86400, "/");
// echo "The cookie is set<br>";
?>

<!-- ============================================ PHP Sessions: ============================================================= -->
<!-- ----------------------------Video 39: $_SESSION & Starting a Session in PHP --------------------------- -->
<?php
// Start the session and get the data
// session_start();
// session_unset();
// session_destroy();
// echo "<br> You have been logged out";

// What is a session?
// Used to manage information across difference pages

// Start the session and get the data
if (isset($_SESSION['username'])) {
    echo "<br>Welcome " . $_SESSION['username'];
    echo "<br> Your favorite category is " . $_SESSION['favCat'];
    echo "<br>";
} else {
    echo "Please login to continue";
}
?>