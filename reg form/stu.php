<?php
$con=mysqli_connect("localhost","root","","form2");
//mysqli_select_db($con,"form2");
if(isset($_POST['submit'])) 
{
	$fname=$_POST['fname'];
	$lastname=$_POST['lastname'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$test=$_POST['testid'];
	$a = mysqli_query($con,"INSERT INTO student_bd(Firstname, Lastname, Email, Phone, Address, test_id)VALUES('$fname','$lastname','$email','$phone','$address','$test')");
	//if ($a)
	//{
	//{
	//	echo "$q";
	//}
	
	if ($a) {
			echo "registration succeessful";
	}else
	{
		echo "failed".mysqli_error($con);
	};
	
    
	//}
	//else{
	//	echo "registration not allow";
	//}
}
 
 
?>