<?php
class myclass
{
	const constant = 'constant value';
	function showconstant()
	{
	echo self::constant."<br/>";

	}

}

echo myclass::constant ."<br/>";
$class = new myclass();
$class ->showconstant();




 ?>