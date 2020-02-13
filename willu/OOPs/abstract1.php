<?php
abstract class one
{
	public function disp()

	{
	echo "inside the parent class<br/>";
	}
}
class two extends one
{
	public function disp()
	{
		echo "inside the child class<br/>";
	 }
}
	class three extends one
	{

	}
	$two = new two();
	echo "<b>calling from the child class two : <b/> <br/>";
	$two->disp();
	echo "<b>calling from the child class three : <b/> <br/>";
	$three = new three();
	$three->disp();
?>