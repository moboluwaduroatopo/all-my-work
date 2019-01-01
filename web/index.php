
<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
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
<!-- <div class="header"> -->
<?php include 'navbar.php'; ?>
<!--banner-->


<!--//login-->

			<!--brand-->
<div class="banner">
<div class="container">
<section class="rw-wrapper">
				<h1 class="rw-sentence">
					<span>Cakes for all occasions</span>
					<div class="rw-words rw-words-1">
						<span>Welcome to </span>
						<span>We look forward</span>
						<span>Beautiful </span>
						<span> Ad10cakestore </span>
						<span>Your satisfaction </span>
						<!-- <span>intelligent systems</span> -->
					</div>
					<div class="rw-words rw-words-2">
						<span>moboluwaduro A.(MA)cake</span>
						<span>to working with you</span>
						<span>Cakes</span>
						<span>& more</span>
						<span>is our priority</span>
						<!-- <span>Excepteur sint occaecat</span> -->
					</div>
				</h1>
			</section>
			</div>
</div>
	<!--content-->
		<div class="content">
			<div class="container">
				<div class="content-top">
					<div class='col-md-6 col-md'>
					<?php
	 			
             $con=mysqli_connect("localhost","root","","ad10cakstore");

					$n=0;
					$select = mysqli_query($con, "SELECT * FROM `type_tb` WHERE type_id = 7 ");
					while($r=mysqli_fetch_array($select)){
						 $n++;
	                 $id=$r['type_id'];
	                 $_SESSION['id']=$id;
					echo"
					
						<div class='col-1'>
						 <a href='single.php?id=".$id."' class='b-link-stroke b-animate-go  thickbox'>
		   <img src='".$r['type_image']."' class='img-responsive' alt=''/><div class='b-wrapper1 long-img'><p class='b-animate b-from-right    b-delay03 '>Birthday</p><label class='b-animate b-from-right    b-delay03 '></label><h3 class='b-animate b-from-left    b-delay03 '>Number</h3></div></a>

							
						</div>
						<div class='col-2'>
							<span>".$r['type_name']."</span>
							<h2><a href='product.php?tid=".$r['type_id']."'>Number Cakes </a></h2>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
							<a href='product.php?tid=".$r['type_id']."' class='buy-now'>Veiw Now</a>
						</div>
					
					";
				}
					?></div>
					<div class='col-md-6 col-md1'>
					<?php
	 			
             $con=mysqli_connect("localhost","root","","ad10cakstore");

					$n=0;
					$select = mysqli_query($con, "SELECT * FROM `type_tb` WHERE type_id <= 3 ");
					while($r=mysqli_fetch_array($select)){
						 $n++;
	                 $id=$r['type_id'];
	                 $_SESSION['id']=$id;
					echo"
					
						<div class='col-3'>
							<a href='single.php?id=".$id."'><img src='".$r['type_image']."' width=400px height =400px class='img-responsive' alt=''>
							<div class='col-pic'>
								<p>Lorem Ipsum</p>
								<label></label>
								<h5>".$r['type_name']."</h5>
								<a href='product.php?tid=".$r['type_id']."'><button class='btn btn-success'>View More</button></a>
							</div></a>
						</div>
					
					";
				}
					?></div>
					
 <div class="clearfix"></div>
				</div>
				<!--products-->
			<div class="content-mid">
				<h3>Cakes </h3>
				<label class="line"></label>
				<div class='mid-popular'>
					<div class="row">
								<?php
			 $con=mysqli_connect("localhost","root","","ad10cakstore");
			// $tid= $_GET['tid'];
  $view = mysqli_query($con, "select * from product_tb join type_tb using (type_id) where product_id <=9")or die(mysqli_error($con));
$counter = 0;
while($r=mysqli_fetch_assoc($view)){
 $id=$r['product_id'];
	$_SESSION['id']=$id;
	
echo "
					<div class='col-md-3 item-grid simpleCart_shelfItem'>
					
			   
					<div class=' mid-pop'>
					<div class='pro-img'>
						<img src='".$r['proimage']."' class='img-responsive' alt=''>
						<div class='zoom-icon '>
						<a class='picture' href='".$r['proimage']."'  rel='title' class='b-link-stripe b-animate-go  thickbox'><i class='glyphicon glyphicon-search icon '></i></a>
						<a href='single.php?id=".$id."'><i class='glyphicon glyphicon-menu-right icon'></i></a>
						
						</div>
						</div>
						<div class='mid-1'>
						<div class='women'>
						<div class='women-top'>
							<span>".$r['type_name']."</span>
							<h6><a href=''></a>".$r['product_name']."</h6>
							</div>
							<div class='img item_add'>
							<a href='single.php?id=".$id."'><button type='submi' class='bu add-to-cart btn btn-dangar' id='add-to-cart'>View more</button></a>	
							</div>
							<div class='clearfix'></div>
							</div>
							<div class='mid-2'>
								<p ><label>#100.00</label><em class='item_price'><span>#</span>".$r['price']." </em></p>
								  <div class='block'>
									<div class='starbox small ghosting'> </div>
								</div>
								
								<div class='clearfix'></div>
							</div>
							
						</div>
					</div>
					
					</div>

					";
					$counter++;
	if($counter == 4)
	{
		echo "</div><div class='row'>";
		$counter = 0;
	}
				}
				mysqli_close($con);
					?></div>
					
			
					<div class="clearfix"></div>
				</div>
			</div>
			
			</div>
			
 
		</div>
		
	<?php include 'footer.php'; ?>
		

	
 
</body>
</html>