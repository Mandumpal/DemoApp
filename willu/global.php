<?php
 $a=1;
 $b=2;
function sum()
{
	 global $b;
	 global $a;
	 $b= $a + $b;
}
sum();
echo $b;


 ?> 