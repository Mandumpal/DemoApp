<!DOCTYPE html>
<html>
    <head>
	<style >
		table{
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
    </head>
    <body>
<table border="1" wid  th="40%" bgcolor="yellow">
  

	<?php
	for ($i=1; $i<8;$i++){  
	 echo "<tr>";
	 for($j=1;$j<8;$j++){
	 	echo "<td>".$i*$j."</td>";
	 }
	 echo "<tr>";
	 }
	?>
	
</table>

  
  </table>	
  </body>
  </html>