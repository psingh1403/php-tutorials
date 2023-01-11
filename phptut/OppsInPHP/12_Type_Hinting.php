<?php

// Type hinting is also called as type declaration

// valid datatypes for type hinting
// int
// float
// string
// bool
// array
// class/interface name
// object

// function sum(int $value)
// {
//     echo $value + 10;
// }

// sum(10);

// // it will show error here.
// sum("hello");

// ---------------------------------------------------

// function fruits(array $names){
//     foreach($names as $name){
//         echo $name ."<br>";
//     }
// }

// // $test = "Pushpendra";
// $test = ['sdfs','rthrfgh','ergujk'];
// fruits($test);

// ---------------------------------------------------

// class hello{
//     public function sayhello(){
//         echo "hello everyone";
//     }
// }

// class bye{
//     public function saybye(){
//         echo "buy everyone";
//     }
// }

// function wow(hello $c){
//     $c->sayhello();
// }

// $test = new hello();
// wow($test);



// ---------------------------------------------------

class school{
	public function getNames(student $names){
		echo "<ul>";
		foreach ($names->Names() as $name) {
			echo "<li>" . $name . "</li>";
		}
		echo "</ul>";
	}
}

class student{
	public function Names(){
		return ["Ram","Krishan","Gopal"];
	}
}

class library{

}

$lib = new library();
$stu = new student();
$sch = new school();

$sch->getNames($stu);

?>