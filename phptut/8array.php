<?php

// PHP Array
// $colors[0] = "red";
// $colors[1] = "green";
// $colors[2] = "yellow";
// $colors[3] = "blue";

// echo "<ul>";
// for ($i = 0; $i < 4; $i++) {
//     echo "<li>$colors[$i]</li>";
// }
// echo "</ul>";

/* ---------------------------------------------------------------------------- */
// $colors = ['red', 'yellow', 'blue', 'green']; /* ----- IInd way */
/* ---- can also use different data types ----- */

//2.)
// echo "<pre>";
// print_r($colors);
// echo "</pre>";

/* ---------------------------------------------------------------------------- */
// $colors = array('red', 'yellow', 'blue', 'green');
// echo $colors[0] . "<br>";

// ===============================================================================================
// PHP Associative Array

// $age = array(
//     "bill" => 25,
//     "steve" => 28,
//     "elon" => 22
// );

// echo $age["bill"] . "<br>";
// echo $age["steve"] . "<br>";
// echo $age["elon"] . "<br>";

// echo '<pre>';
// print_r($age);
// echo '</pre>';

// echo '<pre>';
// var_dump($age);
// echo '</pre>';

//another way to define array

// $age1 = [
//     "bill" => "25",
//     "steve" => 28,
//     "elon" => 22
// ];

// echo '<pre>';
// print_r($age1);
// echo '</pre>';

// echo '<pre>';
// var_dump($age1);
// echo '</pre>';

// $age["elon"] = 50; /* --------- reasign value-------  */

// echo '<pre>';
// print_r($age1);
// echo '</pre>';

// echo '<pre>';
// var_dump($age1);
// echo '</pre>';

//array with Numeric key

// $age2 = array(
//     100 => "25",
//     10 => 28,
//     13 => 22
// );

// echo '<pre>';
// print_r($age2);
// echo '</pre>';

//array with numeric and string key

// $age3 = array(
//     100 => "25",
//     "bill" => 28,
//     13 => 22
//   );

// echo '<pre>';
// var_dump($age3);
// echo '</pre>';

// ===============================================================================================
// PHP Foreach Loop

// $colors = ["red", "green", "blue"];
// foreach ($colors as $value) {
//     echo $value . "<br>";
// }

/* Associative Array For Foreach */
// $age = ["bill" => 25, "steve" => 28, "elon" => 22,];
// foreach ($age as $key => $value) {
//     echo "$key = $value <br>";
// }

/* ------work with ul tag------- */
// echo "<ul>";
// foreach($age as $key => $value){
//   echo "<li>$key = $value </li>";
// }
// echo "</ul>";

// ===============================================================================================
// PHP Multidimensional Array

// $emp = [
//     [1, "Krishana", "Manager", 50000],
//     [2, "Salman", "Salesman", 20000],
//     [3, "Mohan", "Computer Operator", 12000],
//     [4, "Amir", "Driver", 5000]
// ];

// echo "<pre>";
// print_r($emp);
// echo "</pre>";

/* TWO dimensional Array row and column */
// echo $emp[0][0] . " ";
// echo $emp[0][1] . " ";
// echo $emp[0][2] . " ";
// echo $emp[0][3] . " ";
// echo "<br>";

// for ($row = 0; $row < 4; $row++) {
//     for ($col = 0; $col < 4; $col++) {
//         echo $emp[$row][$col] . " ";
//     }
//     echo "<br>";
// }

/* Multidimensional Array Foreach Loop */
// foreach ($emp as $v1) {
//     foreach ($v1 as $v2) {
//         echo $v2 . " ";
//     }
//     echo "<br>";
// }

/* Print with Table tag */
// echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
// echo "<tr>
//         <th>Emp Id</th>
//         <th>Emp Name</th>
//         <th>Designation</th>
//         <th>Salary</th>
//     </tr>";
// foreach ($emp as $v1) {
//     echo "<tr>";
//     foreach ($v1 as $v2) {
//         echo "<td> $v2 </td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

// ===============================================================================================
// PHP Multidimensional Associative Array
// $marks = [
//     "Krishna" => [
//         "physics" => 85,
//         "maths" => 78,
//         "chemistry" => 89
//     ],
//     "Salman" => [
//         "physics" => 68,
//         "maths" => 73,
//         "chemistry" => 79
//     ],
//     "Mohan" => [
//         "physics" => 62,
//         "maths" => 67,
//         "chemistry" => 92
//     ]
// ];

// echo "<pre>";
// print_r($marks);
// echo "</pre>";

/* -------------Foreach Loop Array----------------- */
// foreach($marks as $key => $v1){
//   echo $key;
//   foreach($v1 as $v2){
//     echo $v2 . " ";
//   }
//   echo "</br>";
// }

/* ------------Print with Table tag-------------------- */

// echo "<table border='2px' cellpadding='5px' cellspacing='0'>
//     <tr>
//         <th>Student Name</th>
//         <th>Physics</th>
//         <th>Math</th>
//         <th>Chemistry</th>
//     </tr>";
// foreach($marks as $key => $v1){
//   echo "<tr>
//           <td>$key</td>";
//                foreach($v1 as $v2){
//                     echo "<td> $v2 </td>";
//                 }
//     echo "</tr>";
// }
// echo "</table>";

// ===============================================================================================
// PHP Foreach Loop With List

// $emp = [
//     [1, "Krishana", "Manager", 50000],
//     [2, "Salman", "Salesman", 20000],
//     [3, "Mohan", "Computer Operator", 12000],
//     [4, "Amir", "Driver", 5000]
// ];

// foreach ($emp as list($id, $name, $desg, $salary)) {
//     echo "$id $name $desg $salary </br>";
// }

// echo "<table border='1px' cellpadding='5px' cellspacing='0'>
//     <tr>
//         <th>Emp Id</th>
//         <th>Emp Name</th>
//         <th>Designation</th>
//         <th>Salary</th>
//     </tr>";
// foreach ($emp as list($id, $name, $desg, $salary)) {
//     echo "<tr>
//         <td>$id</td>
//         <td>$name</td>
//         <td>$desg</td>
//         <td>$salary</td>
//     </tr>";
// }
// echo "</table>";

/* -----------Multidimensional Associative Array----------- */
// $emp = [
//     ["id" => 1, "name" => "Krishana", "designation" => "Manager", "salary" => 50000],
//     ["id" => 2, "name" => "Salman", "designation" => "Salesman", "salary" => 20000],
//     ["id" => 3, "name" => "Mohan", "designation" => "Computer Operator", "salary" => 12000],
//     ["id" => 4, "name" => "Amir", "designation" => "Driver", "salary" => 5000]
// ];

// foreach ($emp as list("id" => $id, "name" => $name, "designation" => $desg, "salary" => $salary)) {
//     echo "Id: $id; Name: $name; Designation: $desg; Salary: $salary</br>";
// }

// ===============================================================================================
// PHP Array Count & Sizeof

// $food = array('orange', 'banana', 'apple');
// echo count($food, 1) . '<br>'; /*  ----- IInd parameter is MODE (0 or 1) */

// $food1 = array(
//     'fruits' => array('orange', 'banana', 'apple'),
//     'veggie' => array('carrot', 'collard', 'pea')
// );

/* (Mode counts all the elements of multidimensional arrays) */

// echo sizeof($food1, 1) . '<br>';

// echo sizeof($food1['fruits'], 1) . '<br>';

// $len = count($food);
// for($i = 0; $i < $len; $i++){
//     echo $food[$i] . "<br>";
// }

// $food2 = array('orange', 'banana', 'orange' , 'apple');

// count array values
// echo "<pre>";
// print_r(array_count_values($food2));
// echo "</pre>";

// ===============================================================================================
// Array In_array & Array_search

// $food = array('orange', 'banana', 'apple', 'grapes');

// echo in_array("lime", $food);
// echo in_array("grapes", $food);

/* ---- If Condition InArray------ */
// if (in_array("apple", $food)) {
//     echo "Find Successfully.";
// } else {
//     echo "Can't Find.";
// }

// echo in_array(55, $food,true);

/* ----------Array Search------------- */
// echo array_search("apple", $food);

/* --------Multipledimensional Associative Array------------- */
// $a = array(array('p', 'h'), array('p', 'r'), 'o');
// if (in_array(array('p', 'h'), $a)){}

/* -----------Associative Array-------------- */
// $food = array('a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'grapes');

// echo array_search("apple", $food);

// echo in_array("apple", $food);

// ===============================================================================================
// Array_replace & Array_replace_recursive

// $fruit = ['orange', 'banana', 'apple', 'grapes'];
// $veggie = ['carrot', 'pea'];
// $newArray = array_replace($fruit, $veggie);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

/*----- Index Array --------  */
// $color = ['red', 'green', 'blue'];
// $newArray = array_replace($fruit, $veggie, $color);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

/* ----------------Associative Array------------------- */
// $veggie = ['a' => 'carrot', 'b' => 'pea'];
// $veggie = ['a' => 'carrot', 1 => 'pea'];


/* --------------Array Replace Function----------------- */
// $fruit = ['orange', 'b' => 'banana', 'apple', 'grapes'];

/* ---- array_replace_recursive----------- */
// $array1 = array("a"=>array("red"),"b"=>array("green","pink"));
// $array2 = array("a"=>array("yellow"),"b"=>array("black"));
// $newArray = array_replace_recursive($array1, $array2);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// ===============================================================================================
//  41 video
?>