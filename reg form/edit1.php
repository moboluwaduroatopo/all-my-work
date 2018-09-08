<?php
session_start();
$con=mysqli_connect("localhost","root","","project");

$sname=$con->real_escape_string($_POST['sname']); 
  $mname=$con->real_escape_string($_POST['mname']); 
  $lname=$con->real_escape_string($_POST['lname']); 
  $email=$con->real_escape_string($_POST['email']); 
  $username=$con->real_escape_string($_POST['username']);
  $password=$con->real_escape_string($_POST['password']); 
  $ppt=$con->real_escape_string('images/'.$_FILES['ppt']['name']);
  // if (preg_match("!images!", $_FILES['ppt']['type']) ) {
  //   if (copy($_FILES['ppt']['tmp_name'], $ppt)) {
  //   $_SESSION['username']=$username;
  //   $_SESSION['ppt']=$ppt;
    
  //  }
  //  else{

  //   echo"file upload failed";
  //  }
  //  } 
  // else{
  //    echo"please only upload GIF, JPG, or PNG images!";
  // }

  $a = mysqli_query($con,"update staff_td set surname='$sname',middlename='$mname',lastname='$lname',email='$email',username='$username',password='$password',passport='$ppt' where staff_id='$_SESSION[id]'");
  echo "Done";
 echo "<script> window.location='viewlist.php';</script>";


?>