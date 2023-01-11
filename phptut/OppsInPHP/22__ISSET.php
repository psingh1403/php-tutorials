<?php

// class abc{
//     public $name = "push singh";
//     public $course = "PHP";

// }

// $abcd = new abc();
// echo $abcd->isset($this->name);
// echo $abcd->isset($this->course);

// ----------------------------------------------------------------

class student{
	
	public $course;
	private $first_name;
	private $last_name;
	private $detail = ['name'=>'Test Name','age'=>'20'];

	public function setName($fname, $lname)
	{
		$this->first_name = $fname;
		$this->last_name = $lname;
	}

	public function __isset($name){
		echo isset($this->detail[$name]);
	}
	
}

$test = new student();
// $test->course="PHP";
// echo isset($test->course);
$test->setName("Yahoo","Baba");

echo empty($test->city);

?>