<?php

include 'database.php';

$obj = new database();
$colName = "students.id, students.student_name,students.age, citytb.cname";
$join = "citytb ON students.city = citytb.cid";
$limit = 2;

// ----------------------------------------------------

// create object for Insert a row in the database
// $obj->insert('students', ['student_name' => 'Ram Kumar', 'age' => '20', 'city' => 'raypur']);
// $obj->insert('students', ['student_name' => 'Kumar sanu', 'age' => '45', 'city' => 'Agra']);
// echo "Insert result is: ";
// print_r($obj->getResult());

// ----------------------------------------------------

// create object for Update a perticular row in the database
// $obj->update('students', ['student_name' => 'Krishan Kumar', 'age' => '12', 'city' => 'Mathura'], 'id="7"');
// $obj->update('students', ['city' => 'Goa'], 'city="delhi"');
// echo "<br> Update result is: ";
// print_r($obj->getResult());

// ----------------------------------------------------

// create object for Delete a perticular row from the database
// $obj->delete('students','id="7"');
// $obj->delete('students','age="20"');
// echo "<br> Delete result is: ";
// print_r($obj->getResult());

// ----------------------------------------------------

// create object for Select a perticular row from the database

// $obj->selectSql('SELECT * FROM students');
// $obj->selectSql('SELECT * FROM students where id=2');
// echo "<br>SQL result is: ";
// print_r($obj->getResult());

// $obj->select('students', '*', null, null, null, 2);
// $obj->select('students', '*', null, 'city="agra"', null, null);
// echo "<br>Select result is: ";
// print_r($obj->getResult());

// ----------------------------------------------------

// $obj->select('students', '*', null, null, null, 3);
// echo $obj->pagination('students', null, null, 3);
// echo "<br>Select result is: ";
// print_r($obj->getResult());


$obj->select('students', $colName, $join, null, null, $limit);
echo $obj->pagination('students', $join, null, $limit);
echo "<br>Select result is: ";
print_r($obj->getResult());