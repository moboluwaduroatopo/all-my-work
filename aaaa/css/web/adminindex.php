<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
$con=mysqli_connect("localhost","root","","shop_db");
$result = mysqli_query($con, "select * from product_tb")or die(mysqli_error($con));
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", price:".$row["price"].", sale:".$row["sale"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	
	<style type="text/css">

	</style>
<div class="page-container">	
   <div class="left-content">
	  <?php include 'header.php'; ?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="inbox">
      <h4 class="text-center text-white" style="">Sales Report</h4>
      <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Daily</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Montly</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Yearly</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="profile">
    <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Current Date</th>
                                            <th>Sumtotal</th>
                                        </tr>
                                    </thead>
                                
                                  <?php
                                  $con=mysqli_connect("localhost","root","","shop_db");
                                  $saless= mysqli_query($con, "SELECT curdate() as CURRENTDATE , sum(total) as a_day from sale_tb WHERE dates >= curdate() ");

                                     while($r=mysqli_fetch_array($saless)){

  //echo $r['last_1_month'];
    //$_SESSION['cur']=$r['CURRENTDATE '];                                   
                          $_SESSION['sales']=$r['a_day'];
 
                          echo "   
         <tbody>
                                        <tr>
                                        <td>".$r['CURRENTDATE']."</td>
                                        <td><a href='#'>".$r['a_day']."</a></td>
                                         </tr>
                                       
                                    </tbody>
      ";
 };
                                   ?>
                                </table>
 
  </div>
  <div role="tabpanel" class="tab-pane fade" id="buzz">
     <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Sumtotal</th>
                                           
                                        </tr>
                                    </thead>

                                  <?php
                                  $con=mysqli_connect("localhost","root","","shop_db");
                                 $mont= mysqli_query($con, "SELECT DATE_FORMAT(dates, '%Y-%m') as dats, SUM(total) AS `sum` FROM sale_tb GROUP BY DATE_FORMAT(dates, '%Y-%m')");
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
  <div role="tabpanel" class="tab-pane fade" id="references"> <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Sumtotal</th>
                                        
                                        </tr>
                                    </thead>
                                    <?php
                                  $con=mysqli_connect("localhost","root","","shop_db");
                                 $year= mysqli_query($con, "SELECT DATE_FORMAT(dates, '%Y') as dats, SUM(total) AS `sum` FROM sale_tb GROUP BY DATE_FORMAT(dates, '%Y')");
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
                                     
                                </table></div>
</div>
           <h2 align="center" >Product Price and Profit Record Chart </h2>  
   <div id="chart">
  
</div>
            
      <div class="card mb-3">
        <div class="card-header"><h3 class="" style="text-align: center; color: white">
          <i class="fa fa-table"></i>Product Data </h3></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Product_name</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>year</th>
                    <th>image</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                     <th>No</th>
                    <th>Product_name</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>year</th>
                    <th>image</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
$n=0;
$view = mysqli_query($con, "select * from product_tb")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
  $n++;
  $id=$r['product_id'];
  $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['product_name']."</td><td><span>#</span>".$r['price']." </td><td>".$r['quantity']." </td><td>".$r['year']."</td><td><img src='".$r['pimage']."' width=50px height =50px /></td></tr>";
}

?> </tbody>
            </table>
          </div>
        </div>
        
      </div>       
          <div class="clearfix"> </div>     
   </div>
</div>

<!--inner block end here-->
<!--copy rights start here-->

<!--COPY rights end here-->
</div>

<!--slider menu-->
    <div class="sidebar-menu " style="background-color: red">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="#"><i class="fa fa-cogs"></i><span>Components</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="grids.html">Grids</a></li>
		            <li><a href="portlet.html">Portlets</a></li>		            
		          </ul>
		        </li>
		        <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Element</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Buttons</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="typography.html">Typography</a></li>
		             <li id="menu-arquivos" ><a href="icons.html">Icons</a></li>
		          </ul>
		        </li>
		          <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>		           
		          </ul>
		        </li>
		        
		        <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>
			            <li id="menu-academico-boletim" ><a href="inbox-details.html">Compose email</a></li>
		             </ul>
		        </li>
		         <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
			            <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
		             </ul>
		         </li>
		         <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>
			            <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>
		             </ul>
		         </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'price', 'sale'],
 labels:['Profit', 'price', 'Sale'],
 hideHover:'auto',
 stacked:true
});
</script>
</html>


                      
						
