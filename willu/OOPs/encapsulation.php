<?php  
class App
{
	private $_User;
	public function User()
	{
		if($this-> _User==null)
		{
			$this->_User=new User();
		}
		return $this-> _User;
	}
}





class User
{
   private $_name;
   public function __construct()
   {
   	$this->_name ="wilfred";

   }

   public function GetName()
   {
   	return $this->_name;
   }
   }
 $app = new app();
 echo $app->User()->GetName();











?>