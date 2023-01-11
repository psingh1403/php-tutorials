<?php

// require "first.php";
// require "second.php";

function __autoload($class)
{
    require $class . ".php";
}

$first1 = new first();
$second1 = new second();


?>