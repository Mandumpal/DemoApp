 

<form action="" method="post">
enter a string:<input type="text" name="string">
<input type="submit" name="submit" value="GO">
</form>

<?php

if(isset($_POST['submit']))
{
$s= $_POST['string'];
if($s==NULL)
{
echo "Enter a string!";
}
else
{
function abc()
{
echo $_POST['string'];
}
echo "Entered String is :";
abc();
}
}
?>

 