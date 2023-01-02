<?php

// Functions
// function hello()
// {
//     echo "Hello Everybody.<br>";
// }

// function yahoo()
// {
//     echo "Hello Yahoo baba.<br>";
// }

// hello();
// hello();
// yahoo();
// echo "Hey this is an example.";
// hello();
// hello();

// ===============================================================================================
// Functions With Parameters

// function hello($name)
// {
//     echo "Hello " . $name . "<br>";
// }

// hello("Yahoo Baba"); /* ----------- also show error */

// ---------------------------------------------------------------
// function hello($fname, $lname)
// {
//     echo "Hello $fname $lname.<br>";
// }

// hello("Yahoo", "Baba");

// hello("Bill", "Gates");

/* Default Value : */

// --------------------------------
// function hello($fname = "First", $lname = "Name")
// {
//     echo "Hello $fname $lname.<br>";
// }

// /*  SUM function */
// function sum($a, $b)
// {
//     echo $a + $b;
// }

// sum(10, 20.50);


// /* Passing with Variables */
// $one = 10;
// $two = 20.50;
// sum($one, $two);

// ===============================================================================================
// Functions With Returning Value

//1)
// function hello($fname = "First", $lname = "Last")
// {
//     $v = "$fname $lname" . "<br>";
//     return $v;
// }
// echo hello();
// echo hello("Yahoo", "Baba");

//2)
// $name = hello("Yahoo","Baba");
// echo "Hello $name";

//3)
// function sum($math, $eng, $sc)
// {
//     $s = $math + $eng + $sc;
//     return $s;
// }

// $total = sum(55, 65, 88);
// echo $total. "<br>";

// //4)
// function percentage($st)
// {
//     $per = $st / 3;
//     echo $per . "%";
// }

// percentage($total);

// ===============================================================================================
// Function Argument By Reference

/* function argument By Value */
// function testing(&$string)
// {
//     $string .= 'and something extra.';
// }
// $str = 'This is a string, ';
// testing($str);
// echo $str;

/* function argument By Reference*/
// function first($num)
// {
//     $num += 5;
// }

// function second(&$num)
// {
//     $num += 6;
// }

// $number = 10;
// first($number);
// echo "Original Value is $number<br />";

// second($number);
// echo "Original Value is $number<br />";

// ===============================================================================================
// Variable Functions

// function wow($name) {
//     echo "Hello $name";
// }

// $func = "wow";
// wow('Yahoo Baba');

// /* ---  Anonymous function ----*/
// $sayHello = function($name) {
//   echo "Hello $name!";
// };

// $sayHello('Yahoo Baba');

// ===============================================================================================
// Recursive Function

/*-----Recursive Function------ */
// function display($number) {
//     if($number<=5){
//      echo "$number <br/>";
//      display($number+1);
//     }
// }
    
// display(1);


/* --------Factorial Number--------- */
// function factorial($n)
// {
//   if ($n < 0){
//     return -1;
//   }

//   if ($n == 0){
//     return 1;
//   }else{
//     return ($n * factorial ($n -1));
//   }
// }

// echo factorial(5);

// ===============================================================================================

?>