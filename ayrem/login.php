<?php
$connect=mysqli_connect("localhost","root","","ayrem_db");
if (isset($_SESSION["userid"])) {
  //session_destroy();
header("Location: userindex.php");
	//echo "done";
}

?>
<!-- Modal -->
<?php include('navbar.php'); ?>
<br><br>
<div class="container">
<?php include('signin.php'); ?>
</div>