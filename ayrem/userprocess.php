<?php
session_start();
$errors=array();
//require('conn.php');
	Class Staff{
		// public $
		// public $password;
		// public $email;
		public $connection;

		public function connect(){

			$this->connection=mysqli_connect("localhost", "root", "", "ayrem_db");
		}

			
		public function login($email,$password){
			if (isset($_POST['email']) AND isset($_POST['password'])) {
				$email = $_POST['email'];
                $password=$_POST['password'];
                $pwd=sha1($password);
			$login=mysqli_query($this->connection, "SELECT * FROM user_db Where email='$email' and password='$pwd'");
			$count=mysqli_num_rows($login);
			while ($row=mysqli_fetch_array($login)) {
			$_SESSION['userid']=$row['user_id'];
			$_SESSION['fname'] =$row['firstname'];

			 $_SESSION['lname'] = $row['lastname'];
			}
			if ($count > 0) {
				header("Location:dashboard.php");
				//$_SESSION['email'] = $usern;
                //$_SESSION['success'] = "You are now logged in";
				//echo "done";
			}else{
				echo"failed".mysqli_error($this->connection);
				//header("Location: adminlogin1.php");
				//echo ("Not Found". mysqli_error($this->connection));
			}
			}
			
	
	}
	}


 $staff = new Staff();
  $staff->connect();
 echo $staff->login($_POST["email"], $_POST["password"]);


 
 
?>