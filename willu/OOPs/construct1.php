<?php 
class baseclass
{
	function __construct()
	{
	print "in baseclass constructor<br/>";
	}
}
class subclass extends baseclass
{
	function __construct()
	{
	parent:: __construct();
	print "in subclass constructor";
	}
}
$obj = new baseclass();
$obj = new subclass();





?>