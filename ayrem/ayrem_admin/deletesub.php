<?php
require('conn.php');
$_SESSION['id'] = $_GET['id'];
echo $_SESSION['id'];
$query = "DELETE FROM order_tb WHERE order_id ='$_SESSION[id]'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: orderlistsub.php"); 
?>