<?php
class A
{
	function disp()
	{
		echo "inside the base class <br/>";
	}
}
class B extends A
{
	function disp()
	{
		echo "inside the child class <br/>";
	}
}
class C extends A{

}
$obj = new B();
$obj -> disp();
$obj2 = new C();
$obj2 -> disp();

 ?>