

<?php
$itemstock=[
1=>['item'=>'milk','stock'=>'10'],
2=>['item'=>'bread','stock'=>'20'],
3=>['item'=>'cofeepowder','stock'=>'15'],
4=>['item'=>'sugar','stock'=>'25'],
5=>['item'=>'rice','stock'=>'20'],
6=>['item'=>'salt','stock'=>'30']];
?>
<table border="1" style="border-collapse: collapse;"><thead>
<tr>
<th>item</th>
<th>stock</th>
</thead>
<?php

foreach($itemstock as $key=>$value1)
{
echo "<tr>\n";

foreach($value1 as $key=>$value2)
{
echo"<td>$value2</td>\n";
}
echo "</tr>";
}
?>
</table>

