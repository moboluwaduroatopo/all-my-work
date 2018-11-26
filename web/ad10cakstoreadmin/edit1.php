<?php
session_start();
$con=mysqli_connect("localhost","root","","ad10cakstore");
  $status=$con->real_escape_string($_POST['status']); 
  $a = mysqli_query($con,"update order_tb set status='$status' ,dateDelivered = now() where order_id='$_SESSION[id]'");
 // echo "Done";
 echo "<script> window.location='orderlist.php';</script>";


?>