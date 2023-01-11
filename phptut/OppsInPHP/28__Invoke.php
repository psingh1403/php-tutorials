<?php
class calculation
{
    public $a, $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sum(){
        echo $this->a + $this->b."<br>";
    }

    // use to make object as function

    public function __invoke()
    {
        echo $this->a * $this->b."<br>";
    }
}

$obj = new calculation(20, 30);
$obj->sum();
$obj();
