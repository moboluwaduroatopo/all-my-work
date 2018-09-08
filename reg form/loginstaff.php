<?php
session_start();
$errors=array();
$con=mysqli_connect("localhost","root","","project");
//mysqli_select_db($con,"form2");
// if(isset($_POST['submit'])) 
// {
	 
// 	$username=$_POST['username'];
// 	$password=$_POST['password']; 
	
// 	if (count($errors) == 0) {
// 		$password= md5($password);
// 		$query= "SELECT * FROM staff_td WHERE username='$username' AND password='$password'";
// 		$result = mysqli_query($db, $query)
// 		if (mysqli_num_rows($result) == 1){
// 			echo"success";
// 			//$_SESSION['username'] = $username;
// 			//$_SESSION['success']= "u are now login";

// 		}
// 		else
// 		{
// 			echo"failed";
// 		}
// 	}
	
	
// 	}
	Class Staff{
		public $password;
		public $username;
		public $connection;

		public function connect(){
			$this->connection=mysqli_connect("localhost", "root", "", "project");}
		public function login($usern, $pword){
			$login=mysqli_query($this->connection, "SELECT * FROM staff_td Where username='$usern' and password='$pword'");
			$count=mysqli_num_rows($login);
			if ($count > 0) {
				header("Location:staffportal.html");
			}
			else{
				//header("Location: staff.html");
				echo ("Not Found". mysqli_error($this->connection));
			}
		}
		public function display(){

		}

	} 
	
  $staff=new Staff();
  $staff->connect();
 echo  $staff->login($_POST["username"], $_POST["password"]);

 
 
?>