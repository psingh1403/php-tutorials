<?php

// Class in PHP
class calculation
{
    public $a, $b, $c;
    function add()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

// Create first object in PHP
$c1 = new calculation();
$c1->a = 20;
$c1->b = 10;

// Create second object in PHP
$c2 = new calculation();
$c2->a = 50;
$c2->b = 35;

echo "Sum Value of C1 : " . $c1->add() . "<br>";
echo "Subtraction Value of C2 : " . $c2->sub() . "<br>";
echo "Subtraction Value of C1 : " . $c1->sub()."<br>";
?>
