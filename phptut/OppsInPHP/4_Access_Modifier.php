<?php  

// Public
// protected
// private

class base{
    // private $name;
    // public $name;
    protected $name;
    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show(){
        echo "Your Name : " . $this->name . "<br>";
    }
}

class drive extends base{
    public function get(){
		echo "Your Name : " . $this->name . "<br>";
	}
}

$test = new base("pushpendra singh");
$test2 = new drive("Mohan singh");
//$test->name = "baba Yahoo";
$test->show();
$test2->show();

?>