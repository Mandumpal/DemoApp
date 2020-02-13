
 
 <?php
  $city=array("japan"=>"Tokyo","Mexico"=>"Mexico city","Usa"=>"Newyork city","India"=>"Mumbai","Korea"=>"Seoul","China"=>"Shanghal","Nigeria"=>"Lagos","Argentina"=>"Burnos Aires","Egypt"=>"Cairo","Uk"=>"London");
if(!isset($_POST['submit'])) {
  ?>
  <h1>Please choose a city</h1>
  <form action="" method="post">
  <select name="cities">
 
   <?php
   foreach($city as $option){
  echo "<option value=\"$option\">$option</option>";
  }
  ?>
 </select>
 <input type="submit" name="submit" value="GO">
  </form>
  <?php
}
else
{ 
  $cityy=$_POST['cities'];
  $country = array_search($cityy, $city);
  echo "$cityy is In $country";
}
?>

   


 


