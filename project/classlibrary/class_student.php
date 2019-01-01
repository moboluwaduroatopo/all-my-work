<?php
class Student{
	public $surname;
	public $middleName;
	public $lastName;
	public $gender;
	public $hAddress;
	public $pNumber;
	public $email;
	public $spName;
	public $spNumber;
	public $spEmail;
	public $username;
	public $password;
	public $pLink;
	public $con;
	public function setBiodata($a,$b,$c,$d){
		$this->surname=$a;
		$this->middleName=$b;
		$this->lastName=$c;
		$this->gender=$d;
	}
	public function contact($e,$f,$g){
		$this->hAddress=$e;
		$this->pNumber=$f;
		$this->email=$g;
	}
	public function spInfo($h,$i,$j){
		$this->spName=$h;
		$this->spNumber=$i;
		$this->spEmail=$j;
	}
	public function log($k,$l){
		$this->username=$k;
		$this->password=$l;
	}
	public function connect(){
		$this->con=mysqli_connect("localhost","root","","project");
	}
	public function save(){
		$k=mysqli_query($this->con, "INSERT into student_tb (Surname, Middlename, Lastname, Gender, Email, Phone_No, Username, Password, Home_address, Sponsor, Sp_number, Sp_email, Passport_link) values('$this->surname', '$this->middleName','$this->lastName','$this->gender','$this->email','$this->pNumber', '$this->username', '$this->password','$this->hAddress','$this->spName','$this->spNumber','$this->spEmail','$this->pLink')");
	}
	public function processFile($psize,$ptype, $pname, $ploc){
		$link='Student_passport/'.$pname;
		move_uploaded_file($ploc, $link);
		$this->pLink= $link;
	}
	public function login($u, $pass){
		$r= mysqli_query($this->con, "SELECT * from student_tb where Username='$u' and Password='$pass'");
		$count= mysqli_num_rows($r);
		if($count){
			header("location:student_registration.php");
		}
		else{echo 'Not found';}
	}
}
?>