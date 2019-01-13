<?php session_start();
$connect=mysqli_connect("localhost","root","","ayrem_db");
if (isset($_SESSION["userid"])) {
  //session_destroy();
//header("Location: userindex.php");
    //echo "done";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>AYREM</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

 <!--Main Navigation-->
<header>

  <nav class="navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="#"><strong>AYREM</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" >Buy Data<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >Tv Subcription</a>
        </li>
       
      </ul>
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><button type="button" class="btn btn-info">Logout</button></a>
        </li>
        <li class="nav-item">
        	 <p style="color: white"><?php  echo $_SESSION['fname']." ".$_SESSION['lname'] ; ?></p>
          
        </li>
      </ul>
    </div>
  </nav>

</header>
<!--Main Navigation-->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  
  <?php
} else{
  header("Location: login.php");
}
?>
</body>

</html>


