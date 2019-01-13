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

			$this->connection=mysqli_connect("localhost", "root", "", "ayrem_db");
		}

			private function emailExists($email){
		$pre_stmt = $this->connection->prepare("SELECT admin_id FROM admin_db WHERE email = ? ");
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
			 $date = date("Y-m-d");
			// $notes = ""
			$pwd=sha1($password);
			//$date=now();
			$pre_stmt = $this->connection->prepare("INSERT INTO admin_db(full_name,phone,email,password,uimage,userdate)
            VALUES (?,?,?,?,?,?)");
			$pre_stmt->bind_param("ssssss",$fname,$phone,$email,$pwd,$ppt,$date);
			$result = $pre_stmt->execute() or die($this->connection->error);
			if ($result) {
					header("Location:login.php");
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