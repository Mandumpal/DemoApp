<?php
$family=['George'=>['age'=>'60','relation'=>'father'],
         'Sherly'=>['age'=>'48','relation'=>'mother'],
         'Wilfred'=>['age'=>'25','relation'=>'son'],
         'Alfred'=>['age'=>'23','relation'=>'son'],
         'Philomina'=>['age'=>'85','relation'=>'grandmother']];
         ?>
<table border="1" style="border-collapse: collapse; width:40%; " >
<thead style="text-align: center; ">
<tr>
<th>member</th>
<th>age</th>
<th>relation</th>
</tr>
</thead>

<?php

foreach($family as $key=>$value1)
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
