<!DOCTYPE html>
<html>
<head>
	<title>Atopooilcompany</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
</head>
<body>

	<?php include 'navbar.php'; ?>
	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item ite1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get now
								<span>Ammasco</span> oil</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
								<span>Best</span>
								Standard
							</h3>
							<a class="button2" href="about.php">About Us </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item ite2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>advanced
								<span>A-Z</span> oil</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
								<span>Products</span>
							</h3>
							<a class="button2" href="about.php">About Us </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item ite3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Our
								<span></span> Powerful</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
								<span>Product</span>
							</h3>
							<a class="button2" href="about.php">About Us </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item ite4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get Now
								<span>Lubcom</span> oil</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
								<span>Best Product</span>
							</h3>
							<a class="button2" href="about.php">About Us </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>O</span>ur
				<span>P</span>roducts</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
															<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from type_tb where type_id=1");
				 while($r=mysqli_fetch_array($select)){
	echo"
			<h3 class='heading-tittle text-center font-italic'>".$r['type_name']."</h3>					
	
		";
};
			
				?>
							
							<div class="row">
								<?php 
   require("conn.php");

  $view = mysqli_query($con, "select * from product_tb join type_tb using (type_id) where type_id =1")or die(mysqli_error($con));
$counter = 0;
while($r=mysqli_fetch_array($view)){
 $id=$r['product_id'];
	$_SESSION['id']=$id;
	echo"
			<div class='col-md-4 product-men mt-md-0 mt-5 mt-5'>
									<div class='men-pro-item simpleCart_shelfItem'>
										<div class='men-thumb-item text-center'>
											<img src='".$r['proimage']."' alt='' class='img-fluid'>
											<div class='men-cart-pro'>
												<div class='inner-men-cart-pro'>
													<a href='single.php?id=".$id."' class='link-product-add-cart'>Quick View</a>
												</div>
											</div>
										</div>
										<div class='item-info-product text-center border-top mt-4'>
											<h4 class='pt-1'>
												<a href='single.php?id=".$id."'>".$r['product_name']."</a>
											</h4>
											
											<div class='snipcart-details top_brand_home_details  single-item hvr-outline-out'>
                                             <a href='single.php?id=".$id."'> <input type='submit' name='submit' value='View more' class='button btn' /></a>
											</div>
										</div>
									</div>
								</div>";
}
?>
	</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from type_tb where type_id=2");
				 while($r=mysqli_fetch_array($select)){
	echo"
			<h3 class='heading-tittle text-center font-italic'>".$r['type_name']."</h3>					
	
		";
};
			
				?>
							<div class="row">
															<?php 
   require("conn.php");

  $view = mysqli_query($con, "select * from product_tb join type_tb using (type_id) where type_id =2")or die(mysqli_error($con));
$counter = 0;
while($r=mysqli_fetch_array($view)){
 // $id=$r['product_id'];
	// $_SESSION['id']=$id;
	echo"
			<div class='col-md-4 product-men mt-md-0 mt-5 mt-5'>
									<div class='men-pro-item simpleCart_shelfItem'>
										<div class='men-thumb-item text-center'>
											<img src='".$r['proimage']."' alt='' class='img-fluid'>
											<div class='men-cart-pro'>
												<div class='inner-men-cart-pro'>
													<a href='single.php?id=".$id."' class='link-product-add-cart'>Quick View</a>
												</div>
											</div>
										</div>
										<div class='item-info-product text-center border-top mt-4'>
											<h4 class='pt-1'>
												<a href='single.php?id=".$id."'>".$r['product_name']."</a>
											</h4>
											
											<div class='snipcart-details top_brand_home_details  single-item hvr-outline-out'>
                                             <a href='single.php?id=".$id."'> <input type='submit' name='submit' value='View more' class='button btn' /></a>
											</div>
										</div>
									</div>
								</div>";
}
?>
								
								
							</div>
						</div>
						<!-- //second section -->
						<!-- third section -->
						<div class="product-sec1 product-sec2 px-sm-5 px-3">
							<div class="row">
								<h3 class="col-md-4 effect-bg">Atopo Oil</h3>
								<p class="w3l-nut-middle">Get Extra 10% Off</p>
								<div class="col-md-8 bg-right-nut">
									<img src="images/lovely.jpg" alt="">
								</div>
							</div>
						</div>
						<!-- //third section -->
						<!-- fourth section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
							<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from type_tb where type_id=3");
				 while($r=mysqli_fetch_array($select)){
	echo"
			<h3 class='heading-tittle text-center font-italic'>".$r['type_name']."</h3>					
	
		";
};
			
				?>
							<div class="row">
															<?php 
   require("conn.php");

  $view = mysqli_query($con, "select * from product_tb join type_tb using (type_id) where type_id =3")or die(mysqli_error($con));
$counter = 0;
while($r=mysqli_fetch_array($view)){
 // $id=$r['product_id'];
	// $_SESSION['id']=$id;
	echo"
			<div class='col-md-4 product-men mt-md-0 mt-5 mt-5'>
									<div class='men-pro-item simpleCart_shelfItem'>
										<div class='men-thumb-item text-center'>
											<img src='".$r['proimage']."' alt='' class='img-fluid'>
											<div class='men-cart-pro'>
												<div class='inner-men-cart-pro'>
													<a href='single.php?id=".$id."' class='link-product-add-cart'>Quick View</a>
												</div>
											</div>
										</div>
										<div class='item-info-product text-center border-top mt-4'>
											<h4 class='pt-1'>
												<a href='single.php?id=".$id."'>".$r['product_name']."</a>
											</h4>
											
											<div class='snipcart-details top_brand_home_details  single-item hvr-outline-out'>
                                             <a href='single.php?id=".$id."'> <input type='submit' name='submit' value='View more' class='button btn add-to-cart' /></a>
											</div>
										</div>
									</div>
								</div>";
}
?>
								
								
							</div>
						</div>
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Search Here..</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Product name..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- price -->
						<div class='left-side py-2'>
								<ul>
										<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from type_tb ");
				 while($r=mysqli_fetch_array($select)){
	echo"<li>
									<input type='checkbox' class='checked'>
									<span class='span'>".$r['type_name']."</span>
								</li>
	
		";
};
			
				?>
								
								
								</ul>
							</div>
						<div class='left-side border-bottom py-2'>
							<h3 class='agileits-sear-head mb-3'>Products</h3>
							<ul>
									<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from product_tb ");
				 while($r=mysqli_fetch_array($select)){
	echo"<li>
									<input type='checkbox' class='checked'>
									<span class='span'>".$r['product_name']."</span>
								</li>
	
		";
};
			
				?>
								
							</ul>
						</div>
						<!-- //price -->
						<!-- discounts -->
						<!-- <div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Discount</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">50% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">60% or More</span>
								</li>
							</ul>
						</div> -->
						<!-- //discounts -->
						<!-- reviews -->
						
						<!-- //reviews -->
						<!-- electronics -->
						
						<!-- //electronics -->
						<!-- delivery -->
						
						<!-- //delivery -->
						<!-- arrivals -->
						<!-- <div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">New Arrivals</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 30 days</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 90 days</span>
								</li>
							</ul>
						</div> -->
						<!-- //arrivals -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Best Seller</h3>
							<div class="box-scroll">
								<div class="scroll">

									<div class="row">
											<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from product_tb where product_id= 1 and 6");
				 while($r=mysqli_fetch_array($select)){
	echo"                               <div class='col-lg-3 col-sm-2 col-3 left-mar'>
											<img src='".$r['proimage']."' alt='' class='img-fluid'>
										</div>
										
	
	
		";
};
			
				?>
									</div>
									<div class="row my-4">
										<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from product_tb where product_id= 9  ");
				 while($r=mysqli_fetch_array($select)){
	echo"                               <div class='col-lg-3 col-sm-2 col-3 left-mar'>
											<img src='".$r['proimage']."' alt='' class='img-fluid'>
										</div>
										
	
		";
};
			
				?>
									</div>
									<div class="row">
										<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from product_tb where product_id= 23");
				 while($r=mysqli_fetch_array($select)){
	echo"                               <div class='col-lg-3 col-sm-2 col-3 left-mar'>
											<img src='".$r['proimage']."' alt='' class='img-fluid'>
										</div>
										<div class='col-lg-3 col-sm-2 col-3 left-mar'>
											<img src='".$r['product_name']."' alt='' class='img-fluid'>
										</div>
										
	
	
		";
};
			
				?>
									</div>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from type_tb ");
				 while($r=mysqli_fetch_array($select)){
	echo"<div class='col-lg-6'>
					<div class='join-agile text-left p-4'>
						<div class='row'>
							<div class='col-sm-7 offer-name'>
								<h6>".$r['type_name']."</h6>
								
							</div>
							<div class='col-sm-5 offerimg-w3l'>
								<img src='".$r['type_image']."' alt='' class='img-fluid'>
							</div>
						</div>
					</div>
				</div>
		";
};
			
				?>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
	<?php include 'footer.php'; ?>	
</body>
</html>
