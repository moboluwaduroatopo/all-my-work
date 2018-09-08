
<?php
session_start();
$con=mysqli_connect("localhost","root","","project");

//mysqli_select_db($con,"form2");
if(isset($_POST['submit'])) 
{
	$sname=$con->real_escape_string($_POST['sname']); 
	$mname=$con->real_escape_string($_POST['mname']); 
	$lname=$con->real_escape_string($_POST['lname']); 
	$email=$con->real_escape_string($_POST['email']); 
	$username=$con->real_escape_string($_POST['username']);
	$password=$con->real_escape_string($_POST['password']); 
	$ppt=$con->real_escape_string('images/'.$_FILES['ppt']['name']);
	if (preg_match("!images!", $_FILES['ppt']['type']) ) {
		if (copy($_FILES['ppt']['tmp_name'], $ppt)) {
		$_SESSION['username']=$username;
		$_SESSION['ppt']=$ppt;
		
	 }
   else{

   	echo"file upload failed";
   }
   } 
	else{
     echo"please only upload GIF, JPG, or PNG images!";
	}

	$a = mysqli_query($con,"INSERT INTO staff_td(surname,middlename,lastname,email,username, password,passport)VALUES('$sname','$mname','$lname','$email','$username','$password','$ppt')");
	
	
	if ($a) {
			echo "<b>Welcome";
			
	}
	else
	{
		echo "failed".mysqli_error($con);
	};
	
  
}
 
 
?>