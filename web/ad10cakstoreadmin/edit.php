<?php 
session_start();
$con=mysqli_connect("localhost","root","","ad10cakstore");
$_SESSION['id'] = $_GET['id'];
echo $_SESSION['id'];
$view = mysqli_query($con, "select * from order_tb where order_id = '$_SESSION[id]'")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
?>
<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Register :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" /> 
<!--//theme-style-->
<script src="js/jquery.min.js"></script>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
  <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
      jQuery(function() {
      jQuery('.starbox').each(function() {
        var starbox = jQuery(this);
          starbox.starbox({
          average: starbox.attr('data-start-value'),
          changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
          ghosting: starbox.hasClass('ghosting'),
          autoUpdateAverage: starbox.hasClass('autoupdate'),
          buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
          stars: starbox.attr('data-star-count') || 5
          }).bind('starbox-value-changed', function(event, value) {
          if(starbox.hasClass('random')) {
          var val = Math.random();
          starbox.next().text(' '+val);
          return val;
          } 
        })
      });
    });
    </script>
<!---//End-rate---->
</head>
<body>
<!--header-->

<!--banner-->

<!--login-->
<div class="container">
    <div class="login">
      <form class="form-horizontal" method="post" action="edit1.php" enctype="multipart/form-data">
        <span style="color: white;margin-left: 150px;background-color: red;width: 30%;height: 50px"><?php if(isset($return)){ echo $return;} ?></span>
      <div class="col-md-6 login-do">
        <div class="login-mail">
          <input type="text" name="status" placeholder="" value= <?php echo $r['status'] ?> required="">
          <i class="glyphicon glyphicon-lock"></i>
        </div>
           
        <label class="hvr-skew-backward">
          <input type="submit" name="submit" value="Submit">
        </label>
      
      </div>
      <div class="col-md-6 login-right">
         <h3>Status</h3>
         Step1:
         <p>uncomfirmed</p>
          Step2:
          <p>comfirmed</p>
        Step3:
        <p>delivered</p>
      </div>
      
      <div class="clearfix"> </div>
      </form>
    </div>
  
</div>

<!--//login-->

    <!--brand-->
    
    <!--//footer-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  <script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
 
</body>
</html>
<?php
};
?>