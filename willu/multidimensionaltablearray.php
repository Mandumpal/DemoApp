 <?php

$multicity=array(array('city','country','continent'),
	array('kerala','india','asia'),
	 array('karachi','pakistan','asia'),
	 array('chicago','usa','usa'),
	 array('shanghai','china','asia'),
	 array('tokyo','japan','asia'),
	 array('london','uk','europe')); 
?>
<table border="1"><thead>
	<tr>
<th>
	<?php echo $multicity[0][0]."</th>\n<th>";
	 echo $multicity[0][1]."</th>\n<th>";
	 echo $multicity[0][2]."</th>\n";
	?>
</tr>
</thead>
<?php
  $num=count($multicity);
  for($row=1;$row<$num;$row++)
  {
  	echo "<tr>\n";
  	foreach($multicity[$row]as$key=>$value)
  	{
  		echo"<td>$value</td>\n";
  	}
  	     echo"</tr>\n";
  }
  ?>
</table>








</table>