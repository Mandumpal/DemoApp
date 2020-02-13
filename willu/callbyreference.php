<?php 
function fun(&$var)
{
	$var++;
	return $var;  
}

$a=5;
echo fun($a);
echo "<br>";
echo fun($a);
?>