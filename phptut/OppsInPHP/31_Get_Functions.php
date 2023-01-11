<?php

// list of Get Functions

// get_class()
// get_parent_class()
// get_class_methods()
// get_class_vars()
// get_object_vars()
// get_called_class()
// get_declared_classes()
// get_declared_interfaces()
// get_declared_traits()
// class_alias()

// ---------------------------------------------------------------

// get_class() ------------------

// class myclass
// {
//     function name()
//     {
//         echo "Class Name : " . get_class($this) . "<br>";
//     }
// }

// $obj = new myclass();
// $obj->name();
// echo "Class Name is : " . get_class($obj) . "<br>";

// ---------------------------------------------------------------

// get_parent_class() ---------------

// class abc
// {
//     function name()
//     {
//         echo "Parent Class name : " . get_parent_class($this) . "<br>";
//     }
// }

// class xyz extends abc
// {
// }

// $obj = new xyz();
// $obj->name();
// echo "Parent Class name  is : " . get_parent_class('xyz') . "<br>";

// ---------------------------------------------------------------

// get_class_methods() -----------

// class myClass
// {
//     function __construct()
//     {
//         print_r(get_class_methods($this));
//     }

//     function myfunc1()
//     {
//     }

//     private function myfunc2()
//     {
//     }
// }

// $obj = new myClass();

// $class_methods = get_class_methods('myClass');
// echo "<br>";
// print_r($class_methods);

// foreach ($class_methods as $methods) {
//     echo $methods . "\n";
// }

// ---------------------------------------------------------------

// get_class_vars() --------------

// class myClass
// {
//     public $var1;
//     public $var2 = "hello";
//     public $var3 = 100;
//     private $var4;

//     function __construct()
//     {
//         $this->var1 = "wow";
//         $this->var2 = "Yahoo";
//         print_r(get_class_vars(__CLASS__));
//     }
// }

// $obj = new myClass();
// echo "<br>";
// $class_vars = get_class_vars(get_class($obj));
// print_r($class_vars);


// ---------------------------------------------------------------

// get_object_vars() ------------

// class myClass
// {
//     public $var1;
//     public $var2 = "hello";
//     public $var3 = 100;
//     private $var4;

//     function __construct()
//     {
//         $this->var1 = "wow";
//         $this->var2 = "Yahoo";
//         print_r(get_object_vars($this));
//     }
// }

// $obj = new myClass();
// echo "<br>";
// $class_vars = get_object_vars($obj);
// print_r($class_vars);

// ---------------------------------------------------------------

// get_called_class() --------------------

// class abc
// {
//     static public function test()
//     {
//         var_dump(get_called_class());
//     }
// }

// class xyz extends abc
// {
// }

// abc::test();
// xyz::test();

// ---------------------------------------------------------------

// get_declared_classes() --------------------

// class abc
// {
// }

// class xyz extends abc
// {
// }

// print_r(get_declared_classes());

// ---------------------------------------------------------------

// get_declared_interfaces() --------------------

// interface test
// {
// }


// class abc
// {
// }

// class xyz extends abc
// {
// }

// print_r(get_declared_interfaces());

// ---------------------------------------------------------------

// get_declared_traits() --------------------

// trait test
// {
// }

// trait test2
// {
// }

// class abc
// {
//     use test;
// }

// class xyz extends abc
// {
// }

// print_r(get_declared_traits());


// ---------------------------------------------------------------

// class_alias() --------------------

// class myClass
// {
//     public $test;
// }

// class_alias("myClass", "mc");

// $a = new myClass();
// $b = new mc();

// $a->test = "Hello";
// echo $a->test;

// $b->test = "Hello";
// echo $b->test;
