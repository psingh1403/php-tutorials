<?php

// code for unexpected errors:

// $n = 0;
// if ($n > 0) {
//     $div = 2 / $n;
//     echo $div;
// } else {
//     echo "Enter the valid number.";
// }

// --------------------------------------------------------------------

// $n = 2;
// try {
//     if ($n <= 0) {
//         throw new Exception("Enter the valid number.");
//     } 
//     $div = 2 / $n;
//     echo $div;
// } catch (Exception $e) {
//     echo $e->getMessage();
// }

// --------------------------------------------------------------------

// function division($n){
//     try {
//         if ($n <= 0) {
//             throw new Exception("Enter the valid number.");
//         } 
//         $div = 2 / $n;
//         echo $div;
//     } catch (Exception $e) {
//         echo $e->getMessage();
//     }
// }

// division(12);
// division(0);

// --------------------------------------------------------------------

// $n = 2;
// try {
//     if ($n <= 0) {
//         throw new Exception("Enter the valid number.");
//     }
//     $div = 2 / $n;
//     echo $div;
// } catch (Exception $e) {
//     echo $e->getMessage();
// } finally {
//     echo "<br>This is a Final blocak!!!";
// }

// --------------------------------------------------------------------

// Create your own exception
// class My_Exception extends Exception{
//     function error_message(){
//         $error = "My exception message: ".$this->getMessage() . "<br>Error on line number: ".$this->getLine();
//         return $error;
//     }
// }

// function division($n)
// {
//     try {
//         if ($n <= 0) {
//             throw new Exception("<br>Enter the valid number.");
//         }
//         if ($n == 3) {
//             throw new My_Exception("<br>Your number is 3.");
//         }
//         $div = 2 / $n;
//         echo $div;
//     } catch (My_Exception $e) {
//         echo $e->getMessage();
//     }catch (Exception $e) {
//         echo $e->getMessage();
//     } finally {
//         echo "<br>This is a Final blocak!!!";
//     }
// }

// division(12);
// division(0);
// division(3);

