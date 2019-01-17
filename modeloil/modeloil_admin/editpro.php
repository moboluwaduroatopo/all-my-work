<?php
session_start();
$con=mysqli_connect("localhost","root","","atopooil_db");
  $name=$con->real_escape_string($_POST['name']); 
   $price=$con->real_escape_string($_POST['price']);
    $decrip1=$con->real_escape_string($_POST['decrip1']);
     $decrip2=$con->real_escape_string($_POST['decrip2']);
      //$=$con->real_escape_string($_POST['']);
       $ppt=$con->real_escape_string('images/'.$_FILES['ppt']['name']);
  $a = mysqli_query($con,"update product_tb set product_name='$name', price='$price',decrip1='$decrip1',decrip2='$decrip2',date = now() where product_id='$_SESSION[id]'");
 // echo "Done";
 echo "<script> window.location='productlist.php';</script>";


?>