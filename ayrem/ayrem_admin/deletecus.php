<?php
require('conn.php');
$_SESSION['id'] = $_GET['id'];
echo $_SESSION['id'];
$query = "DELETE FROM user_db WHERE user_id ='$_SESSION[id]'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: customer.php"); 
?>