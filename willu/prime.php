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
    function prime()
    {
      $input=$_POST['input']; 

      for ($i = 2; $i < $input; $i++)
      {  
        if ($input % $i == 0) 
        {  
          echo 'The Number '. $input . ' is not prime';
          return 1; 
        } 
      }
      echo 'The Number '. $input . ' is prime';  
      return 0;
    } 
    prime(); 
  }
  
}
?>  