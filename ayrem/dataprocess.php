<?php
session_start();
	Class myproduct{
		public $phone;
		public $email;
		public $typ;
        public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "ayrem_db");
		}
			function saveToDataBase($phone,$email,$typ){
			$result=mysqli_query($this->connect, "INSERT INTO orderd_tb(phone,email,status,dateOrdered,dateDelivered,type_id) VALUES ('$phone','$email','unconfirmed',now(),'','$typ')");
				if ($result) {
					$fetchID = mysqli_query($this->connect,"select orderd_id from orderd_tb ");
					while($fid = mysqli_fetch_array($fetchID))
					{
						//$sid = $fid['sales_id'];
						$_SESSION['id']=$fid['orderd_id'];
						
					}
					//echo   $_SESSION['id'];
					header("Location:orderdata.php");
				}

			else{
					echo("NOT SAVED").mysqli_error($this->connect);
				}
		}
	


	} 
  $myproduct=new myproduct();
  $myproduct->connect();
  $myproduct->saveToDataBase($_POST["phone"],$_POST["email"],$_POST["typ"]);

 
 
?>