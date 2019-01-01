
<!DOCTYPE html>
<html lang='zxx'>

<head>
	<title>Atopooil Store </title>
	<!-- Meta tag Keywords -->
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta charset='UTF-8' />
	<meta name='keywords' content='Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design'
	/>
	

	<!-- Custom-Files -->
	<link href='css/bootstrap.css' rel='stylesheet' type='text/css' media='all' />
	<!-- Bootstrap css -->
	<link href='css/style.css' rel='stylesheet' type='text/css' media='all' />
	<!-- Main css -->
	<link rel='stylesheet' href='css/fontawesome-all.css'>
	<!-- Font-Awesome-Icons-CSS -->
	<link href='css/popuo-box.css' rel='stylesheet' type='text/css' media='all' />
	<!-- pop-up-box -->
	<link href='css/menu.css' rel='stylesheet' type='text/css' media='all' />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href='//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext' rel='stylesheet'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese'
	    rel='stylesheet'>
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
		<?php include 'navbar.php'; ?>

	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	
	



	<!-- banner-2 -->
	<div class='page-head_agile_info_w3l'>

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class='services-breadcrumb'>
		<div class='agile_inner_breadcrumb'>
			<div class='container'>
				<ul class='w3_short'>
					<li>
						<a href='index.php'>Home</a>
						<i>|</i>
					</li>
		
<li>Shop</li>


					
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- top Products -->
	<div class='ads-grid py-sm-5 py-4'>
		<div class='container py-xl-4 py-lg-2'>
			<!-- tittle heading -->
							<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>hop
				</h3>
	
			
			<!-- //tittle heading -->
			<div class='row'>
				<!-- product left -->
				<div class='agileinfo-ads-display col-lg-9'>
					<div class='wrapper'>
						<!-- first section -->
						<div class='product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4'>
							<div class='row'>
								<?php 
   require("conn.php");
    $limit = 9; 


    if (isset($_GET["page"] )) 
        {
        $page  = $_GET["page"]; 
        } 
    else 
       {
        $page=1; 
       };  

$record_index= ($page-1) * $limit;   
//$tid= $_GET['tid'];
  $view = mysqli_query($con, "select * from product_tb LIMIT $record_index, $limit")or die(mysqli_error($con));
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
											<div class='info-product-price my-2'>
												<span class='item_price'>".$r['price']."</span>
												
											</div>
											<div class='snipcart-details top_brand_home_details  single-item hvr-outline-out'>
												
											<a href='single.php?id=".$id."'><button type='submi' class='button btn  add-to-cart btn btn-info' id='add-to-cart'>View more</button></a>

											</div>
										</div>
									</div>
								</div>";
}
$sql = "SELECT COUNT(*) FROM product_tb"; 
$retval1 = mysqli_query($con, $sql);  
$row = mysqli_fetch_row($retval1);  
$total_records = $row[0];
//$limit = 2;
echo "<ul class='pagination'>";

    echo "<li><a href='shop.php?page=".($page-1)."' class='button'>Previous</a></li>"; 
    // echo "<li><a href='p.php?page=".$i."'>".$i."</a></li>";
    echo "<li><a href='shop.php?page=".($page+1)."' class='button'>NEXT</a></li>";


    echo"</ul>"; 
   
// $total_pages = ceil($total_records / $limit);  
// //$pagLink = "<div class='pagination'>";  
// for ($i=1; $i<=$total_pages; $i++) {  

                  
// };  
//echo $pagLink . "</div>";     
    mysqli_close($con);
?>
								   
						
							</div>
						</div>
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class='col-lg-3 mt-lg-0 mt-4 p-lg-0'>
					<div class='side-bar p-sm-4 p-3'>
						<div class='search-hotel border-bottom py-2'>
							<h3 class='agileits-sear-head mb-3'>Categoties</h3>
							<form action='#' method='post'>
								<input type='search' placeholder='Search Categoties...' name='search' required=''>
								<input type='submit' value=' '>
							</form>
							</div>
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
						
						<!-- ram -->
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
						<!-- //ram -->
						<!-- price -->
						
						<!-- //price -->
						<!-- discounts -->
						<div class='left-side border-bottom py-2'>
							<h3 class='agileits-sear-head mb-3'>Discount</h3>
							<ul>
								<li>
									<input type='checkbox' class='checked'>
									<span class='span'>5% or More</span>
								</li>
								<li>
									<input type='checkbox' class='checked'>
									<span class='span'>10% or More</span>
								</li>
								<li>
									<input type='checkbox' class='checked'>
									<span class='span'>20% or More</span>
								</li>
								<li>
									<input type='checkbox' class='checked'>
									<span class='span'>30% or More</span>
								</li>
								<li>
									<input type='checkbox' class='checked'>
									<span class='span'>50% or More</span>
								</li>
								<li>
									<input type='checkbox' class='checked'>
									<span class='span'>60% or More</span>
								</li>
							</ul>
						</div>
						<!-- //discounts -->
						<!-- offers -->
						
						<!-- //offers -->
						<!-- delivery -->
						<div class='left-side border-bottom py-2'>
							<h3 class='agileits-sear-head mb-3'>Cash On Delivery</h3>
							<ul>
								<li>
									<input type='checkbox' class='checked'>
									<span class='span'>Eligible for Cash On Delivery</span>
								</li>
							</ul>
						</div>
						<!-- //delivery -->
						<!-- arrivals -->
						
						
						<!-- //arrivals -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

	<!-- middle section -->
	<div class='join-w3l1 py-sm-5 py-4'>
		<div class='container py-xl-4 py-lg-2'>
			<div class='row'>
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
				<!-- <div class='col-lg-6 mt-lg-0 mt-5'>
					<div class='join-agile text-left p-4'>
						<div class='row '>
							<div class='col-sm-7 offer-name'>
								<h6>A Bigger Phone</h6>
								<h4 class='mt-2 mb-3'>Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class='col-sm-5 offerimg-w3l'>
								<img src='images/off2.png' alt='' class='img-fluid'>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>