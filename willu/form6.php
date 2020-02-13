
  <html>  
<body>  
<form method = "post">   
Length: <input type="text" name="length">   
<br><br>   
Width: <input type="text" name="width"> <br>   
<input type = "submit" name = "submit" value="Enter">   
</form>   
</body>   
</html>  
<?php   
if(isset($_POST['submit']))
{
$s=$_POST["length"];
$r=$_POST["width"];
if($s==NULL && $r==NULL OR $s==NULL OR $r==NULL)
{
echo "Enter the values!";
}
else
{
	function abc()
	{
$width = $_POST['length'];   
$length = $_POST['width'];   
$area = $width*$length;
echo " A rectangle of length $width and width $length has a area of $area"; 
}

 abc();
}
} 
 
?>  