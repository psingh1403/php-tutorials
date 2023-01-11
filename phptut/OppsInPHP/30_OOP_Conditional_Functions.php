<?php

// List of all conditional functions

// class_exists() : 
// interface_exists() : 
// method_exists() : 
// trait_exists() : 
// property_exists() : 
// is_a() : object is related to class or not.
// is_subclass_of() : object of a subclass

// -----------------------------------------------------------

// class MyClass
// {
// }

// if (class_exists('MyClass')) {
//     echo "This class is exist.";
//     // $obj = new MyClass();
// } else {
//     echo "This class is not exist.";
// }


// -----------------------------------------------------------

// interface MyInterface
// {
// }

// if (interface_exists('MyInterface')) {
//     echo "This interface is exist.";
//     class MyClass implements MyInterface
//     {
//     }
// } else {
//     echo "This interface is not exist.";
// }

// -----------------------------------------------------------

// class MyClass
// {
//     public function MyMethod()
//     {
//     }
// }

// $obj = new MyClass();

// if (method_exists($obj, 'MyMethod')) {
//     echo "This method is exist.";
// } else {
//     echo "This method is not exist.";
// }


// -----------------------------------------------------------

// trait MyTrait
// {
//     public function MyMethod()
//     {
//         return __TRAIT__;
//     }
// }

// if (trait_exists('MyTrait')) {
//     echo "This trait is exist.";
//     class MyClass
//     {
//         use MyTrait;
//     }
// } else {
//     echo "This trait is not exist.";
// }

// -----------------------------------------------------------

// class MyClass
// {
//     public $test;
// }

// if (property_exists('MyClass', 'test')) {
//     echo "This property is exist.";
// } else {
//     echo "This property is not exist.";
// }


// -----------------------------------------------------------

// class MyClass
// {
// }

// $obj = new MyClass();

// if (is_a($obj, 'MyClass')) {
//     echo "This Object is of Class MyClass.";
// } else {
//     echo "This Object is not of Class MyClass.";
// }

// -----------------------------------------------------------

// class parentClass
// {
// }

// class childClass extends parentClass
// {
// }

// $obj = new childClass();

// if (is_subclass_of($obj, 'parentClass')) {
//     echo "This \$obj is a object of subclass of parentClass.";
// } else {
//     echo "This \$obj is not a object of subclass of parentClass.";
// }