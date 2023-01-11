<?php

// list of all Magic Constants
// __LINE__ : return the line number. ----------
// __FILE__ : return the absulete path of the file. ----------
// __DIR__ : return the absulete path of the main folder. ----------
// __FUNCTION__ : return the name of the current function. ----------
// __CLASS__ : return the name of the current class. ----------
// __METHOD__ : return the name of the current method. ----------
// __NAMESPACE__ : return the name of the current namespace. ----------
// __TRAIT__ : return the name of the current trait. ----------


// ------------------------------------------------------

// echo  "Line Number : " . __LINE__ . "<br>";

// ------------------------------------------------------

// echo  "the full path of this file is : " . __FILE__ . "<br>";

// ------------------------------------------------------

// echo "the full path of this directory is : " . __DIR__ . "<br>";

// ------------------------------------------------------

// function MyFunction()
// {
//     echo  "the function name is : " . __FUNCTION__ . "<br>";
// }

// MyFunction();

// ------------------------------------------------------

// class MyClass
// {
//     public function getClassName()
//     {
//         return __CLASS__;
//     }
// }

// $obj = new MyClass();
// echo $obj->getClassName();

// ------------------------------------------------------

// class MyClass1
// {
//     public function getClassName()
//     {
//         return __METHOD__;
//     }
// }

// $obj = new MyClass1();
// echo $obj->getClassName();

// ------------------------------------------------------

// namespace MyNamespace;

// class MyClass2
// {
//     public function getNamespace()
//     {
//         return __NAMESPACE__;
//     }
// }

// $obj = new MyClass2();
// echo $obj->getNamespace();

// ------------------------------------------------------

// namespace MyNamespace;

// class MyClass3
// {
//     public function getNamespace()
//     {
//         return __CLASS__;
//     }
// }

// $obj = new MyClass3();
// echo $obj->getNamespace();

// ------------------------------------------------------

// trait MyTrait
// {
//     public function getTraitName()
//     {
//         return __TRAIT__;
//     }
// }
// class MyClass4
// {
//     use MyTrait;
// }

// $obj = new MyClass4();
// echo $obj->getTraitName();
