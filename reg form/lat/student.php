<?php 
class Student
{
	public $firstname ="Anonymous";
	public $phone="911";
	public $lastname;
	public $email;
	public $address;
	public $con;
	public function sayName()
	{
		echo "<b>My name is ".$this->firstname;
	}
	public function setName($firstname)
	{
		$this->firstname=$firstname;
		//echo $username;
	}

	public function setlast($last)
	{
		$this->lastname=$lastname;
		// echo $pwd;
	}
    public function setemail($email)
	{
		$this->email=$email;
		// echo $pwd;
	}
	public function setaddress($address)
	{
		$this->address=$address;
		// echo $pwd;
	}
	public function setphone($phone)
	{
		$this->phone=$phone;
		// echo $phone
	 function save()
	 {
  mysqli_query($this->con, "INSERT INTO student_bd(firstname,lastname,email,address,phone) VALUES('$this->firstname','$this->lastname','$this->email','$this->address','$this->phone')");
  //echo "successful";
	}

	  function connect(){
		$this->con=mysqli_connect("localhost","root","","form2");
	}	
}
$taiwo=new Student();
$taiwo->setName($_POST['firstname']);
$taiwo->setLastname($_POST['lastname']);
$taiwo->setEmail($_POST['email']);
$taiwo->setAddress($_POST['address']);
$taiwo->setPhone($_POST['phone']);
$taiwo->sayFirst();
$taiwo->sayLast();
$taiwo->sayEmail();
$taiwo->sayAddress();
$taiwo->sayName();
 $taiwo->connect();
 $taiwo->save();
?>