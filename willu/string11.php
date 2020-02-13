<form method="post">  
Enter a string: <input type="text" name="input">  
<input type="submit" name="submit" value="ENTER">  
</form>  
<?php  
$string = "ZEESHAN";

$i =0;

while(($string[$i])!=null){

        $i++;

}

$i--;

while(($string[$i])!=null){

        echo $string[$i];

$i--;

}
else 
{
  function reverse()
  {
    $number=$_POST['input'];
    $string="$number";
    echo "reverse string of $string is" .strrev ($string);
    }
    reverse();
}
}
?>
