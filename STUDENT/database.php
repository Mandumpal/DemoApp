<?php

class database
{
 public $servername="localhost";
 public $username="root";
 public $password="";
 public $database="student";
 public $con;

function __construct()
{
	$this->con=new mysqli($this->servername,$this->username,$this->password,$this->database);
	if($this->con->connect_error) 
		{
			die("CONNECTION FAILED".$this->con->connect_error);
        }

 }
}



?>