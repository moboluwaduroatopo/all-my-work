<?php

	Class myproduct{
		public $name;
		public $email;
		public $subject;
		public $message;
        public $connect;
   //include 'conn.php';
		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "ayrem_db");
		}
			function saveToDataBase($name,$email,$subject,$message){
			$result=mysqli_query($this->connect, "INSERT INTO mail_tb(name,email,subject,message,status,dateSend,datereplied) VALUES ('$name','$email','$subject','$message','unconfirmed',now(),'')");
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
  $myproduct->saveToDataBase($_POST["name"],$_POST["email"],$_POST["subject"],$_POST["message"]);

 
 
?>