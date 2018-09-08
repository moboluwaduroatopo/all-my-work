<?php

	Class admin{
		public $firstname;
		public $lastname;
		public $email;
		public $address;
		public $phone;
		public $password;
		
      public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "onlinebank");
		}
			function saveToDataBase($firstname, $lastname,$email,$address,$phone,$password){
			$result=mysqli_query($this->connect, "INSERT INTO customer_td(Firstname,lastname,email,address,phone,password) VALUES ('$firstname','$lastname','$email','$address','$phone','$password')");
				if ($result) {
					
					echo "SAVED ";
				}

			else{
					echo("NOT SAVED");
				}
		}
        
		public function display(){

		}

	
	

	} 
  $admin=new admin();
  $admin->connect();
  $admin->saveToDataBase($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["address"], $_POST["phone"], $_POST["password"]);


 