<?php 
class Student
{
	public $lname ="Anonymous";
	public $phone="911";
	public $password;
	public $con;
	public function sayName()
	{
		echo "<b>My name is ".$this->lname;
	}
	public function setName($lastname)
	{
		$this->lname=$lastname;
		//echo $username;
	}

	public function setPassword($pwd)
	{
		$this->password=$pwd;
		// echo $pwd;
	}

	public function save()
	 {
  mysqli_query($this->con, "INSERT into form_db(name,password) VALUES('$this->lname','$this->password')");
  //echo "successful";
	}

	 public function connect(){
		$this->con=mysqli_connect("localhost","root","","form");
	}
}
$taiwo=new Student();
$taiwo->setName($_POST['lname']);
$taiwo->setPassword($_POST['pwd']);
$taiwo->sayName();
 $taiwo->connect();
 $taiwo->save();
?>