<?php

	Class admin{
		
		public $email;
		public $password;
		
      public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "onlinebank");
		}
			
         function login($email, $password){
			$login=mysqli_query($this->connect, "SELECT * FROM admin_td Where email='$email' and password='$password'");
			$count=mysqli_num_rows($login);
			if ($count > 0) {
				//header("Location:portal.html");
				echo("successfull");
			}
			else{
				//header("Location: .html");
				echo ("Not Found". mysqli_error($this->connect));
			}
		}
		public function display(){

		}

	
	

	} 
  $admin=new admin();
  $admin->connect();
  $admin->login($_POST["email"],$_POST["password"]);

 