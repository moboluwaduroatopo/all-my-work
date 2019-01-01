<?php
session_start();
$con=mysqli_connect("localhost","root","","atopooil_db");
  $status=$con->real_escape_string($_POST['status']); 
  $a = mysqli_query($con,"update contactus_tb set status='$status' ,datereplied=now() where contact_id='$_SESSION[id]'");
 // echo "Done";
 echo "<script> window.location='contact.php';</script>";


?>