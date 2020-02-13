<?php 
abstract class MyAbstractClass
{
	abstract function MyAbstractFunction()
	{
       
	}
}
abstract class one {
	abstract function disp();
}
class two extends one {
	public function disp(){
		echo "inside the child class<br/>";
	}
}
class three extends one {
	public function disp(){
		echo "inside the child class 2<br/>";
	}
}
$two = new Two();
echo "<b>calling from child class two:</b><br/>";
$two->disp();
echo "<b>calling from child class three:</b><br/>";
$three = new Three();
$three->disp();

?>