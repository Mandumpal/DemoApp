<?php
class A
{
	public function __construct()
	{
		echo "Building an object"."<br>";

	}
	    public function __destruct()
	    {
		echo "Destroying the object"."<br>";

}
}
$obj=new A();

?>