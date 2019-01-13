<?php
session_start();
require('conn.php');
  $fname=$con->real_escape_string($_POST['fname']); 
  $email=$con->real_escape_string($_POST['email']); 
$phone=$con->real_escape_string($_POST['phone']);
 $password=$con->real_escape_string($_POST['password']);
  $pwd=sha1($password);
  $a = mysqli_query($con,"update admin_db set full_name='$fname',email='$email',phone='$phone',password='$pwd' where admin_id ='$_SESSION[id]'");
 // echo "Done";
 echo "<script> window.location='adminlist.php';</script>";


?>