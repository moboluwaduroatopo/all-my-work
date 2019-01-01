<?php

	Class myproduct{
		public $name;
		public $email;
		public $message;
        public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "atopooil_db");
		}
			function saveToDataBase($name,$email,$message){
			$result=mysqli_query($this->connect, "INSERT INTO contactus_tb(name,email,message,status,datesend,datereplied) VALUES ('$name','$email','$message','unconfirmed',now(),'')");
				if ($result) {
					
					//echo "done ";
					header("Location:contact.php");
				}

			else{
					echo("NOT SAVED").mysqli_error($this->connect);
				}
		}
	


	} 
  $myproduct=new myproduct();
  $myproduct->connect();
  $myproduct->saveToDataBase($_POST["name"],$_POST["email"],$_POST["message"] );

 
 
?>