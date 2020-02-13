<body>
<form action="" method="post">
enter a limit:<input type="text" name="string">
<input type="submit" name="submit" value="ENTER">
</form>
<?php   
// PHP code to get the Fibonacci series 
// Recursive function for fibonacci series. 
if(isset($_POST[' submit']))
{

$number=$_POST['string'];
function Fibonacci(){ 
      
    // if and else if to generate first two numbers 
  $number=$_POST['string'];
  $a = 0;
  $b = 1;
    if ($number <= 0 || $number==NULL)
    {
      echo "The limit should be greater than zero <br>";
    }    
    else if ($number == 1) 
    {
      echo $a;
    }    
    else
    {
      //$number=$_POST['string'];
      echo "First $number numbers of fibonacci series : <br>";
      $a = 0;
      $b = 1;
      echo $a;
      echo "<br>";
      echo $b;
      echo "<br>";
      for($i = 2; $i < $number; $i++){
        $c= $a + $b;
        echo $c;
        echo "<br>";
        $a = $b;
        $b = $c;
    
      }
    }
  } 
Fibonacci();
}  
?> 
</body>