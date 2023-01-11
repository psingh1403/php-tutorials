<?php

// class abc{
//     private $first_name;
//     private $last_name;
//     private function setName($fname,$lname){
//         $this->first_name = $fname;
//         $this->last_name = $lname;
//     }

//     public function __call($method, $args){
//         echo "<br> this is private and non existing method.";
//         print_r($args);
//     }
// }

// $test = new abc();
// $test->setName("push","singh");
// $test->personal();

// -----------------------------------------------------------------------

class student
{

    private $first_name;
    private $last_name;

    private function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        } else {
            echo "Method does not exist : $method";
        }
    }
}

$test = new student();

$test->setName("Yahoo", "Baba");

echo "<pre>";
print_r($test);
echo "</pre>";
