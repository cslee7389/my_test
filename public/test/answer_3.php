<?php
$a = 1;

function func( &$a ){ 
	echo $a;
	$a = 100;
}


func($a); 

echo "<br>";

echo $a;

echo "<br>";

class A{
	
	public $a = 10;

}

$obj = new A();

func($obj->a);

echo "<br>";

echo $obj->a;

?>