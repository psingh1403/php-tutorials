<?php

// trait test
// {
//     public function hello()
//     {
//         echo 'Say hello';
//     }
// }

// class A
// {
//     public function hello()
//     {
//         echo 'Hello Everyone';
//     }
// }

// class B extends A
// {
//     use test;
//     public function hello()
//     {
//         echo 'Say Hii';
//     }
// }

// $obj1 = new B();
// $obj1->hello();

// $obj1 = new A();
// $obj1->hello();

// ---------------------------------------------------------------

// trait test1
// {
//     public function hello()
//     {
//         echo 'Hello from hello trade';
//     }
// }

// trait test2
// {
//     public function hello()
//     {
//         echo 'Say hiii';
//     }
// }

// class apple
// {
//     // trying to run both the trait functions
//     use test1,test2{
//         test1::hello insteadOf test2;
//         // rename the function
//         test2::hello as myhello;
//     }
// }

// $obj1 = new apple();
// $obj1->hello();
// $obj1->myhello();

// ---------------------------------------------------------------

// trait hello{
//     private function sayhello(){
//         echo 'Hello from hello trade';
//     }
// }

// class base1{
//     // using private function outside the trait
//     use hello{
//         hello::sayhello as public;
//     }
// }

// $test = new base1();
// $test->sayhello();

?>