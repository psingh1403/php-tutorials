<?php

include 'database.php';

$obj = new database();
$colName = "students.id, students.student_name,students.age, citytb.cname";
$join = "citytb ON students.city = citytb.cid";
$limit = 2;


$obj->select('students', '*', $join, null, null, $limit);
// echo "<br>Select result is: ";
// print_r($obj->getResult());

$result = $obj->getResult();
// print_r($result);

echo "<table border='1' width='500px'>
<tr><th>ID</th><th>Name</th><th>Age</th><th>City</th></tr>
";
foreach ($result as list("id" => $id, "student_name" => $name, "age" => $age, "cname" => $city)) {
    echo "<tr><td>$id </td><td> $name </td><td> $age </td><td> $city </td></tr>";
}
echo "</table>";
echo $obj->pagination('students', $join, null, $limit);
