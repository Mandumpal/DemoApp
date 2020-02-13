<?php

$lunches = [
'Monday'=>['entree'=>'meals','cost'=>'40',
'sidedish'=>'Sambar','cost1'=>'15',
'drink'=>'Hot water','cost2'=>'5'],

'Tuesday'=>['entree'=>'Chappathi','cost'=>'30',
'sidedish'=>'Beef curry','cost1'=>'25',
'drink'=>'Lemon juice','cost2'=>'5'],

'Wednesday'=>['entree'=>'Dosa','cost'=>'20',
'sidedish'=>'Chutney','cost1'=>'15',
'drink'=>'Tea','cost2'=>'10'],

'Thursday'=>['entree'=>'Biryani','cost'=>'50',
'sidedish'=>'Chicken curry','cost1'=>'25',
'drink'=>'Chilled cucumber       drink','cost2'=>'15'],

'Friday'=> ['entree'=>'Fried rice','cost'=>'45',
'sidedish'=>'Chilli chicken','cost1'=>'25',
'drink'=>'Hot water','cost2'=>'10']];
?>
<table border="1" style="border-collapse: collapse; width:50%;">
	
	<thead style="text-align: center;">
		<tr>
		<td rowspan="2">week</td>
		<td colspan="6">dishes</td>
	</tr>
	<tr>
	<td>entree</td>	
     <td>cost</td>
     <td>sidedish</td>
     <td>cost</td>
     <td>drink</td>
     <td>cost</td>
	</tr>
</thead>
<?php

foreach($lunches as $key=>$value1)
{
echo "<tr>\n";
echo "<td>$key</td>";

foreach($value1 as $key=>$value2)
{
echo"<td>$value2</td>\n";
}
echo "</tr>";
}
?>
</table>
