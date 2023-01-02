<?php

// ================================================================================
// variables in php
// $name = "pushpendra singh";
// echo $name;

// ================================================================================
// Data types in php
// String:-
// $name = "Pushpendra";

// Integer:-
// $num = 20;

// Float:-
// $numF = 20.20;

// Boolean:-
// $rigth = true;

// Array: - 
// $x = array(12, 23, 34, 45, 6);

// Object: - 
// $x = new myClass();

// null
// $x = null;

// $name = "Pushpendra";
// echo "<br>" . $name . "<br>";
// var_dump($name);

// ================================================================================
// Constant variable: 
// syntex: - define(name, value, case-insensitive);

// can't use $ sign with constant variable name.
// define(num, 500,true);
// echo num;

// ================================================================================
// Global/Local Variable

// $x = 10;
// function test() {
//   global $x; /* ------Global Variable------- */
//   echo "Variable x inside function : $x <br>";
// }
// test();

// echo "Variable x outside function : $x";

/* --------------------- */

$x = 5;
$y = 10;

function test() {
    global $x, $y;
    $x = $x + $y;
}

test();
echo $x;
?>