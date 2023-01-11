<?php

class personal
{
    protected static $name = "pushpendra";
    public function show()
    {
        // echo self::$name;
        echo static::$name;  // Late Static Binding
    }
}

class person extends personal
{
    protected static $name = "Singh";
}

$test = new person();
$test->show();

?>