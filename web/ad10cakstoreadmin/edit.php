<?php 
session_start();
$con=mysqli_connect("localhost","root","","ad10cakstore");
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
         <p>Uncomfirmed</p>
          Step2:
          <p>Comfirmed</p>
        Step3:
        <p>Delivreed</p>
      </div>
      
      <div class="clearfix"> </div>
      </form>
    </div>
  <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Daily Sales Report</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Montly  Sales Report</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Yearly  Sales Report</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Orderid</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Item</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Dateordered</th>
                    <th>DateDelivered</th>
                                        </tr>
                                    </thead>
                                
                                  <?php
                                    $n=0;
                                  $con=mysqli_connect("localhost","root","","ad10cakstore");
                                  $saless= mysqli_query($con, "select * from order_tb where status = Uncomfirmed ");

                                     while($r=mysqli_fetch_array($saless)){

  //echo $r['last_1_month'];
    //$_SESSION['cur']=$r['CURRENTDATE '];                                   
                          //$_SESSION['sales']=$r['a_day'];
  $n++;
                   $id=$r['order_id'];
                   $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['name']."</td><td>".$r['contact']."</td><td>".$r['address']."</td><td>".$r['email']."</td><td>".$r['item']."</td><td>".$r['amount']."</td><td>".$r['status']."</td><td>".$r['dateOrdered']."</td><td>".$r['dateDelivered']."</td></tr>";
}

?> 
                                </table>
 
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Sumtotal</th>
                                           
                                        </tr>
                                    </thead>

                                  <?php
                                  $con=mysqli_connect("localhost","root","","ad10cakstore");
                                 $mont= mysqli_query($con, "select * from order_tb where status = comfirmed");
                       while($r=mysqli_fetch_array($mont)){

  //echo $r['last_1_month'];
    //$_SESSION['cur']=$r['CURRENTDATE '];                                   
                       $_SESSION['sales']=$r['sum'];
 
                        echo "   
         <tbody>
                                        <tr>
                                        <td>".$r['dats']."</td>
                                        <td><a href='#'>".$r['sum']."</a></td>
                                         </tr>
                                       
                                    </tbody>
      ";
 };
                                   ?>
                                     

                                  
                                </table>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Sumtotal</th>
                                        
                                        </tr>
                                    </thead>
                                    <?php
                                  $con=mysqli_connect("localhost","root","","ad10cakstore");
                                 $year= mysqli_query($con, "select * from order_tb where status = delivered");
                       while($r=mysqli_fetch_array($year)){

  //echo $r['last_1_month'];
    //$_SESSION['cur']=$r['CURRENTDATE '];                                   
                     $_SESSION['sales']=$r['sum'];
 
                       echo "   
                      <tbody>
                                        <tr>
                                        <td>".$r['dats']."</td>
                                        <td><a href='#'>".$r['sum']."</a></td>
                                         </tr>
                                       
                                    </tbody>
      ";
 };
                                   ?>
                                     
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </section>
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