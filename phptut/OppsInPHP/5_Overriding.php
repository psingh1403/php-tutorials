<?php

// Property/Attrebute overloading
// class base1
// {
//     public $name = "Pushpendra singh";
// }

// class drive1 extends base1
// {
//     public $name = "Ram Kumar";
// }

// $base_obj = new base1();
// $drive_obj = new drive1();

// echo $base_obj->name . '<br>';
// echo $drive_obj->name. '<br>';

// ---------------------------------------------------------------------------------

// Method Overloading
class method_base
{
    public $name = "Parent Class";

    public function calu($a, $b)
    {
        return $a * $b;
    }
}

class method_drive extends method_base
{
    public $name = "Child Class";
    public function calu($a, $b)
    {
        return $a + $b;
    }
}

$method_obj1 = new method_base();
$method_obj2 = new method_drive();

echo $method_obj1->calu(5, 10) . '<br>';
echo $method_obj2->calu(5, 10) . '<br>';
