<?php

// what is Traits?
// trait test
// {
//     public function hello()
//     {
//         echo 'Say Hello' . "<br>";
//     }
// }

// class A
// {
//     use test;
// }

// class B
// {
//     use test;
// }

// $obj = new A();
// $obj->hello();

// $obj2 = new B();
// $obj2->hello();


// --------------------------------------------------------------

// trait example
// {
//     public function hello($name)
//     {
//         echo 'Say Hello to ' . $name . '<br>';
//     }
// }

// class apple
// {
//     use example;
// }

// class ball
// {
//     use example;
// }

// $obj = new apple();
// $obj->hello("Pushpendra singh");

// $obj2 = new ball();
// $obj2->hello("Ravi rajan");


// --------------------------------------------------------------

trait hello
{
    public function sayhello()
    {
        echo "Hello everyone\n";
    }
    public function sayhi()
    {
        echo "Hi everyone\n";
    }
}

trait bye
{
    public function saybye()
    {
        echo "Bye Bye everyone\n";
    }
}

class base1
{
    use hello, bye;
}

class base2
{
    use hello;
}

$test = new base1();

$test->sayhello();
$test->sayhi();
$test->saybye();

?>