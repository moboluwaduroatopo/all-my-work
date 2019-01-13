<?php
session_start();
  require('conn.php');
  $status=$con->real_escape_string($_POST['status']); 
  $a = mysqli_query($con,"update mail_tb set status='$status' ,datereplied = now() where mail_id='$_SESSION[id]'");
 // echo "Done";
 echo "<script> window.location='contact.php';</script>";


?>