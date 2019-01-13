<?php
session_start();
  require('conn.php');
  $status=$con->real_escape_string($_POST['status']); 
  $a = mysqli_query($con,"update orderd_tb set status='$status' ,dateDelivered = now() where order_id='$_SESSION[id]'");
 // echo "Done";
 echo "<script> window.location='orderdatalist.php';</script>";


?>