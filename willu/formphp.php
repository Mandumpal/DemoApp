<?php  
if(!isset($_POST['submit']))
{
?>	
	
<h3 style = background-color:white;> Please enter your information </h3>
<form action="" method="POST">
City:
<input type = "text" name ="cityname"><br><br>

Month:
<input type="text" name ="month"><br><br>

Year:
<input type="text" name ="year"><br><br>
<p>Please choose the kinds of wheather you experianced from the list below. <br> choose all that apply </p>

<input type = "checkbox" name = "wheather[]" value = "Sunshine">
Sunshine<br>

<input type = "checkbox" name = "wheather[]" value = "Clouds">
Clouds<br>

<input type = "checkbox" name = "wheather[]" value = "Rain">
Rain<br>

<input type = "checkbox" name = "wheather[]" value = "Hail">
Hail<br>

<input type = "checkbox" name = "wheather[]" value = "Sleet">
Sleet<br>
<input type = "checkbox" name = "wheather[]" value = "Snow">
Snow<br>

<input type = "checkbox" name = "wheather[]" value = "Wind">
Wind<br>

<input type = "checkbox" name = "wheather[]" value = "Cold">
Cold<br>

<input type = "checkbox" name = "wheather[]" value = "Heat">
Heat<br>
<input type="submit"  name="submit" value="GO">
</form>
<?php
   }
   else
   {
  	$arr=array($_POST['cityname'],$_POST['month'],$_POST['year']);
   	echo "In ".$arr['0']." in the month of ".$arr['1']." ".$arr['2'].", you observed the following wheathers. <br>  <ul>";

   
   foreach($_POST['wheather'] as $value)
   //echo $value;
   echo "<li>$value</li>";
}
 echo "</ul>";

   ?>

   