<?php session_start();

	Class myproduct{
		public $iuc;
		public $phone;
		public $email;
		public $typ;
        public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "ayrem_db");
		}
			function saveToDataBase($iuc,$phone,$email,$typ){
				$date = date('m/d/y h:i:s A');
			$result=mysqli_query($this->connect, "INSERT INTO order_tb(iuc,phone,email,status,dateOrdered,dateDelivered,type_id) VALUES ('$iuc','$phone','$email','unconfirmed',now(),'','$typ')");
				if ($result) {
					$fetchID = mysqli_query($this->connect,"select order_id from order_tb ");
					while($fid = mysqli_fetch_array($fetchID))
					{
						//$sid = $fid['sales_id'];
						$_SESSION['id']=$fid['order_id'];
						
					}
					//echo  $_SESSION['id'];
					header("Location:ordersub.php");
				}

			else{
					echo("NOT SAVED").mysqli_error($this->connect);
				}
		}
	


	} 
  $myproduct=new myproduct();
  $myproduct->connect();
  $myproduct->saveToDataBase($_POST["iuc"],$_POST["phone"],$_POST["email"],$_POST["typ"]);

 
 
?>