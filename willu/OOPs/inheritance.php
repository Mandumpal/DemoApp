 <?php    
  class Bird {

     public function fly()
     {
     	echo "Fly method of Bird class called";
     }
     }
     	class Eagle extends Bird {
     		public function fly(){
     		echo "Fly method of the eagle class called";
     	}
     }

      class Swift extends Bird {
      	public function fly()
      	{
      		echo "Fly method of the swift-class called";

      	}
      }
      $e= new eagle();
      $s= new swift();
      $e->fly();
      echo "<br>";
      $s->fly();








 ?>