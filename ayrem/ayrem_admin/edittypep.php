<?php
session_start();
 require('conn.php');
  $name=$con->real_escape_string($_POST['name']); 
   $price=$con->real_escape_string($_POST['price']);
    $a = mysqli_query($con,"update type_tb set catname='$name', price='$price' where type_id='$_SESSION[id]'");
 // echo "Done";
 echo "<script> window.location='Addnewtype.php';</script>";


?>