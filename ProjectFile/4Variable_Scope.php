<?php
$x=2;
$y=1;

function myTest()
{
	global $x,$y;
	$y=$x+$y;
}
myTest();
echo "Addition is: ".$y;
?>