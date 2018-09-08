<?php 
class Student
{
	public $uname ="Anonymous";
	public $phone="911";
	public $password;
	public $con;
	public function sayName()
	{
		echo "<b>My name is ".$this->uname;
	}
	public function setName($username)
	{
		$this->uname=$username;
		//echo $username;
	}

	public function setPassword($pwd)
	{
		$this->password=$pwd;
		// echo $pwd;
	}

	public function save()
	 {
  mysqli_query($this->con, "INSERT into student_td(name,password) VALUES('$this->uname','$this->password')");
  //echo "successful";
	}

	 public function connect(){
		$this->con=mysqli_connect("localhost","root","","test_bd");
	}	
}
$taiwo=new Student();
$taiwo->setName($_POST['uname']);
$taiwo->setPassword($_POST['pwd']);
$taiwo->sayName();
 $taiwo->connect();
 $taiwo->save();
?>