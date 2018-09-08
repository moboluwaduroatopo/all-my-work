<?php

	Class admin{
		public $transaction;
		public $amount;
		public $name;
		
		
      public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "onlinebank");
		}
			function saveToDataBase($transaction,$amount,$name){
			$result=mysqli_query($this->connect, "INSERT INTO transaction_td(account_id,transaction_type,amount,name,date) VALUES ('$account_id','$transaction','$amount','$name',now())");
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
  $admin->saveToDataBase($_POST["id"],$_POST["transaction"], $_POST["amount"], $_POST["name"]);


 