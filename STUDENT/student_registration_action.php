<?php
require 'Query_class.php';
if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$age=$_POST['age'];
		$address=$_POST['address'];
        $phone=$_POST['phone'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['pwd'];
}
 $obj=new Query_class();
 $result=$obj->insert_student($name,$age,$address,$phone,$email,$username,$password);
 if($result)
 {
 	header('location:view_profile.php');
 }
?>