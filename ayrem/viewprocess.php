<?php

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
					// $order_id=$order;
					// $order= $_SESSION[id];
					// //echo "done ";
					// echo $order;
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