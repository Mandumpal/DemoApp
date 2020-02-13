!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!11    <?php !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!11


require 'database.php';
class Query_class extends database
{
 function insert_student($name,$age,$address,$phone,$email,$username,$password)
 	{
 		$sql="INSERT INTO student_registration (Name,Age,Address,Phone_no,Email_id,Username,Password)VALUES ('$name','$age','
 		$address','$phone','$email','$username','$password')";
 		var_dump($sql);
        if(!$stmt=mysqli_query($this->con,$sql))
 		{
 			die("prepare statement error");
 		}
 		 return $stmt;
 	}
}





?>
