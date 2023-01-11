<?php  

require 'products.php';
require 'testing.php';

function wow(){
    echo "wow function from namespace file. <br>";
}

use pro\who\ren as cmd;
// $obj = new test\product();
// $obj = new pro\product();
$obj = new cmd\product();

wow();
// pro\wow();

?>