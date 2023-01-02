<?php

// ===============================================================================================
// If Statement
$a = 30;
$b = 10;
if ($a < $b) {
    echo "A is smaller the B" . "<br>";
} else {
    echo "A is not smaller the B" . "<br>";
}

// If Elseif Statement
$b = 30;
if ($b < 20) {
    echo "B is smaller the 20" . "<br>";
} elseif ($b > 20) {
    echo "B is grater the 20" . "<br>";
} else {
    echo "A is not smaller the B" . "<br>";
}

// ===============================================================================================
// Switch Statement

$weekday = 7;
switch ($weekday) {
    case 1:
        echo "Today is Monday" . "<br>";
        break;
    case 2:
        echo "Today is Tuesday" . "<br>";
        break;
    case 3:
        echo "Today is Wednesday" . "<br>";
        break;
    case 4:
        echo "Today is Thursday" . "<br>";
        break;
    case 5:
        echo "Today is Friday" . "<br>";
        break;
    case 6:
        echo "Today is Saturday" . "<br>";
        break;
    case 7:
        echo "Today is Sunday" . "<br>";
        break;
    default:
        echo "Enter the correct weekday." . "<br>";
}

$weekday = 3;
switch ($weekday) {
    case 1:
    case 2:
    case 3:
        echo "Today is Monday" . "<br>";
        echo "<br>This is just test." . "<br>";
        break;
    case 4:
        echo "Today is Thursday" . "<br>";
        break;
    case 5:
        echo "Today is Friday" . "<br>";
        break;
    case 6:
        echo "Today is Saturday" . "<br>";
        break;
    case 7:
        echo "Today is Sunday" . "<br>";
        break;
    default:
        echo "Enter the correct weekday." . "<br>";
}

$age = 18;

switch ($age) {
    case ($age >= 15 && $age <= 20):
        echo "You are eligible." . "<br>";
        break;
    case ($age >= 20 && $age <= 30):
        echo "You are not eligible." . "<br>";
        break;
    default:
        echo "Enter the valid age." . "<br>";
}


?>