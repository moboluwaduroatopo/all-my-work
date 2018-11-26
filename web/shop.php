<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Products :: w3layouts</title>
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
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--header-->
<?php include 'navbar.php'; ?>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h1>Products</h1>
		<em></em>
		<h2><a href="index.html">Home</a><label>/</label>Products</h2>
	</div>
</div>
	<!--content-->
		<div class="product">
			<div class="container">
			<div class="col-md-9">
				<div class="mid-popular">
					<?php
			 $con=mysqli_connect("localhost","root","","ad10cakstore");
			 // $tid= $_GET['tid'];
  $view = mysqli_query($con, "select * from product_tb join type_tb using (type_id) WHERE product_id <= 9")or die(mysqli_error($con));
$counter = 0;
while($r=mysqli_fetch_array($view)){
 $id=$r['product_id'];
	$_SESSION['id']=$id;
	
echo "
					<div class='col-md-4 item-grid1 simpleCart_shelfItem' style='width:250px ;height :400px'>
					<div class=' mid-pop' >
					<div class='pro-img' >
						<img src='".$r['proimage']."' class='img-responsive' alt='' >
						<div class='zoom-icon '>
						<a class='picture' href='".$r['proimage']."' rel='title' class='b-link-stripe b-animate-go  thickbox'><i class='glyphicon glyphicon-search icon '></i></a>
						<a href='single.html'><i class='glyphicon glyphicon-menu-right icon'></i></a>
						</div>
						</div>
						<div class='mid-1'>
						<div class='women'>
						<div class='women-top'>
							<span>".$r['type_name']."</span>
							<h6><a href='single.html'>".$r['product_name']."</a></h6>
							</div>
							<div class='img item_add'>
								<a href='#'><img src='images/ca.png' alt=''></a>
							</div>
							<div class='clearfix'></div>
							</div>
							<div class='mid-2'>
								<p ><label>#100.00</label><em class='item_price'><span>#</span>".$r['price']."</em></p>
								  <div class='block'>
									<div class='starbox small ghosting'> </div>
								</div>
								<div class='clearfix'></div>
							</div>
							</div>
						</div></div>
			";
// $counter++;
// 	if($counter == 3)
// 	{
// 		echo "</div><div class='row'>";
// 		$counter = 0;
// 	}

}

?>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Categories</h4>
							 <ul class="menu-drop">
                   	<?php
	 			
             $con=mysqli_connect("localhost","root","","ad10cakstore");

					$n=0;
					$select = mysqli_query($con, "SELECT * FROM `type_tb` WHERE type_id <= 10 ");
					while($r=mysqli_fetch_array($select)){
						 $n++;
	                 $id=$r['type_id'];
	                 $_SESSION['id']=$id;
					echo"
					<li class='item1'><a href='product.php?tid=".$r['type_id']."'>".$r['type_name']."</a>
								
							</li>
						
					
					";
				}
					?>
							
						
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
 <section  class="sky-form">
					<h4 class="cate">Discounts</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						 </div>
					 </div>
				 </section> 				 				 
				 
					
					 <!---->
					 <section  class="sky-form">
						<h4 class="cate">Type</h4>
							<div class="row row1 scroll-pane">
								<!-- <div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Sofa Cum Beds (30)</label>
								</div> -->
								                   	<?php
	 			
             $con=mysqli_connect("localhost","root","","ad10cakstore");

					$n=0;
					$select = mysqli_query($con, "SELECT * FROM `product_tb` WHERE product_id <= 10 ");
					while($r=mysqli_fetch_array($select)){
						 $n++;
	                 $id=$r['product_id'];
	                 $_SESSION['id']=$id;
					echo"
						<div class='col col-4'>
									<label class='checkbox'><input type='checkbox' name='checkbox'><i></i>".$r['product_name']."</label>

								</div>
					
						
					
					";
				}
					?>
						
								
				   		<!-- <section  class="sky-form">
						<h4 class="cate">Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
								</div>

								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Levis</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Persol</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Edwin</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>New Balance</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Paul Smith</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ray-Ban</label>
								</div>
							</div>
				   </section>		 -->
		</div>
			<div class="clearfix"></div>
			</div>
				<!--products-->
			
			<!--//products-->
		<!--brand-->
		<!-- <div class="container">
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="images/ic.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic1.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic2.png" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="images/ic3.png" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			</div> -->
			<!--//brand-->
			
			
		</div>
	<!--//content-->
		<!--//footer-->
	<?php include 'footer.php'; ?>
		<!--//footer-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


</body>
</html>