<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
   $empAges;
   $empAges ["wilfred"]="25";
   $empAges ["robish"]="22";
   $empAges ["sasi"]="23";
   $empAges ["madhu"]="28";
   foreach ($empAges as $key => $value) {
   	echo "Name: $key,age:$value <br/>";
   }
	?>

</body>
</html>