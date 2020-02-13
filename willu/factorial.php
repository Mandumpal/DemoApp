<form method="post">  
Enter a Number: <input type="text" name="input">  
<input type="submit" name="submit" value="ENTER">  
</form>  
<?php  
if(isset($_POST['submit']))  
{  
  $input=$_POST['input']; 
  if ($input==NULL || $input=="")
  {
    echo "Enter a valid number! <br>";
  } 
  else
  {
    function factorial()
    {

      $input=$_POST['input']; 
      
      $fact=1;

      for($i=$input; $i>=1;$i--) {
      $fact = $fact * $i;
  }
  
   echo "factorial of $input is $fact";   
   
     }     
  factorial();
  }
  }
?>  
