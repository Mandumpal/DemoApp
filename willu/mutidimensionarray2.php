 <?php

$multicity=array(array('city','country','continent','rank'),
	array('kerala','india','asia','1'),
	 array('karachi','pakistan','asia','2'),
   array('chicago','usa','NorthAmerica','3'),
   array('shanghai','china','asia','5'),
   array('tokyo','japan','asia','6'),
   array('london','uk','europe','7')); 
?>
<table border="1"><thead>
	<tr>
<th>
	<?php echo $multicity[0][0]."</th>\n<th>";
	 echo $multicity[0][1]."</th>\n<th>";
   echo $multicity[0][1]."</th>\n<th>";
	 echo $multicity[0][3]."</th>\n";
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