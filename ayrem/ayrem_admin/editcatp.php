<?php
session_start();
require('conn.php');
  $name=$con->real_escape_string($_POST['name']); 
      //$=$con->real_escape_string($_POST['']);
  $a = mysqli_query($con,"update category_tb  set name='$name' where category_id ='$_SESSION[id]'");
 // echo "Done";
 echo "<script> window.location='addtype.php';</script>";


?>