<?php
session_start();
$con=mysqli_connect("localhost","root","","atopooil_db");
  $name=$con->real_escape_string($_POST['name']); 
      //$=$con->real_escape_string($_POST['']);
  $ppt=$con->real_escape_string('images/'.$_FILES['ppt']['name']);
  $a = mysqli_query($con,"update type_tb set type_name='$name' where type_id='$_SESSION[id]'");
 // echo "Done";
 echo "<script> window.location='addtype.php';</script>";


?>