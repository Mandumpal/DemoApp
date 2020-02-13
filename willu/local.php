<?php
$globalName = "zoe";
function sayhello()
{
	global $localName;
	$localName="Harry";
	echo "Hello,$localName!<br>";

}
sayHello();
echo "The value of\$globalName is:'$globalName'<br>";
echo "The value of \$localName is:'$localName'<br>";


 ?>