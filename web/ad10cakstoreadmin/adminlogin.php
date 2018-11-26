<?php 
session_start();
$errors=array();
//require('conn.php');
	Class Staff{
		// public $
		// public $password;
		// public $username;
		public $connection;

		public function connect(){

			$this->connection=mysqli_connect("localhost", "root", "", "ad10cakstore");
		}

			private function emailExists($email){
		$pre_stmt = $this->connection->prepare("SELECT user_id FROM user_tb WHERE email = ? ");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->connection->error);
		$result = $pre_stmt->get_result();
		if($result->num_rows > 0){
			return 1;
		}else{
			return 0;
		}
	}
		public function createUserAccount($fname,$phone,$email,$password,$ppt){
		// To protect your application from sql attack you can user 
		// prepares statment
		if ($this->emailExists($email)) {
			$return = "EMAIL_ALREADY_EXISTS";
			include"adminregister.php";
		}else{
			// $pass_hash = password_hash($password,PASSWORD_BCRYPT,["cost"=>8]);
			// $date = date("Y-m-d");
			// $notes = "";
			$pre_stmt = $this->connection->prepare("INSERT INTO user_tb(full_name,phone,email,password,uimage)
            VALUES (?,?,?,?,?)");
			$pre_stmt->bind_param("sssss",$fname,$phone,$email,$password,$ppt);
			$result = $pre_stmt->execute() or die($this->connection->error);
			if ($result) {
					header("Location:adminlogin1.php");
			}else{
					//echo "failed".mysqli_error($con);
		header("Location:adminregister.php");
			}
		}
			
	}
		
			
	
	}


 $staff = new Staff();
  $staff->connect();
 echo $staff->createUserAccount($_POST["fname"],$_POST["phone"],$_POST["email"], $_POST["password"],('images/'.$_FILES['ppt']['name']));
 
 
 
?>