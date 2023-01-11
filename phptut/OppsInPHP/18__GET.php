<?php

// class abc
// {
//     private $name = "Pushpendra singh";
//     public function __get($property)
//     {
//         echo "You are trying to access Non Existing or provate property($property)";
//     }
// }

// $test = new abc();
// $test->name;


class abc
{
    private $data = ["name"=>"Yahoo Baba","course"=>"PHP","fee"=>"2000"];
    public function __get($key)
    {
        if(array_key_exists($key, $this->data)){
			return $this->data[$key];
		}else{
			return "<br>This key($key) is not defined.";
		}
    }
}

$test = new abc();
echo $test->name;
echo $test->age;