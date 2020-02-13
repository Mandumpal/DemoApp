

<?php
    $get_fname = $_POST['fname'];
    $get_lname = $_POST['lname'];
    $get_age = $_POST['age'];
    $get_gender = $_POST['gender'];
    $get_phone=$_POST['phone'];
    $get_email=$_POST['email'];
    $get_username=$_POST['username'];
    $get_password=$_POST['password'];
    $get_cpassword=$_POST['cpassword'];
     function isEmpty()
     {
      if(empty($get_fname) || empty($get_lname) || empty($get_age) || empty($get_gender) || empty($get_phone) || empty($get_email) || empty($get_email) || empty($get_username) || empty($get_password) || empty($get_cpassword))
        {
          Echo "you must enter the fields";
          echo "<br/>";
        }

     }


     function fname_valid()
     {
        $get_fname = $_POST['fname'];
        if(!preg_match("/^[a-zA-Z ]*$/",$get_fname))
        {
          echo "First Name : <span style='color:#FF0000;'>Only Alphabets and white spaces are allowed</span>";
          echo "<br/><br/>";
        }
        else
        {
          echo "First Name : $get_fname";  
          echo "<br/><br/>";
        }
     }


     function lname_valid()
     {
        $get_lname = $_POST['lname'];
        if(!preg_match("/^[a-zA-Z ]*$/",$get_lname))
        {
          echo "Last Name : <span style='color:#FF0000;'>Only Alphabets and white spaces are allowed</span>";
          echo "<br/><br/>";
        }
        else
        {
          echo "Last Name : $get_lname";  
          echo "<br/><br/>";
        }
     }


     function age_valid()
     {
        $get_age = $_POST['age'];
        if($get_age>=45)
        {
          echo "Age : <span style='color:#FF0000;'>Your age is beyond the limit</span>";
          echo "<br/><br/>";
         
        }
        else if (!preg_match("/^[0-9]+$/",$get_age))
        {
          echo "Age : <span style='color:#FF0000;'>Enter Numeric Value</span>";
          echo "<br/><br/>";
        }
        else
        {
          echo "Age : $get_age";
          echo "<br/><br/>";
        }
     }


     function phone_valid()
     {
        $get_phone=$_POST['phone'];
        if (!preg_match("/^[0-9]{10}+$/",$get_phone))
          {
            echo "Phone No : <span style='color:#FF0000;'>Enter valid phone number</span>";
            echo "<br/><br/>";
          }
          else
          {
            echo "Phone No : $get_phone";
            echo "<br/><br/>";
          }
     }


     function email_valid()
     {
        $get_email=$_POST['email'];
        if (!filter_var($get_email, FILTER_VALIDATE_EMAIL))
          {
            echo "Email-ID : <span style='color:#FF0000;'>Invalid email format</span>";
            echo "<br/><br/>";
          }
          else
          {
            echo "Email-ID :$get_email";
            echo "<br/><br/>";
          }
         
     }
 
     function password_valid()
     {
        $get_password=$_POST['password'];
        $get_cpassword=$_POST['cpassword'];
        if($get_password!=$get_cpassword)
          {
            echo "Password : <span style='color:#FF0000;'>Password mismatch</span>";
            echo "<br/><br/>";
          }
          else
          {
            echo "Password :$get_password";
            echo "<br/><br/>";
          }
     }
 


    if(empty($get_fname) || empty($get_lname) || empty($get_age) || empty($get_gender) || empty($get_phone) || empty($get_email) || empty($get_email) || empty($get_username) || empty($get_password) || empty($get_cpassword))
    {
      isEmpty();
    }
    else
    {
      fname_valid();
      lname_valid();
      age_valid();
      echo "Gender : $get_gender";
      echo "<br/><br/>";
      phone_valid();
      email_valid();
      echo "Username :$get_username";
      echo "<br/><br/>";
      password_valid();
    }


 
?>

