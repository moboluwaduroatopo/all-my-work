<?php   require("conn.php");
 ?>
<?php session_start(); ?>
<?php //print_r($_SESSION['cart']); ?>
<?php date_default_timezone_set('Asia/Manila'); ?>
<?php
    $jim = new Data();
    $countproduct = $jim->countproduct();
    
    //$cat = $jim->getcategory();
    class Data {
        function countproduct(){
            $count = 0;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart']:array();
            foreach($cart as $row):
                if($row['qty']!=0){
                    $count = $count + 1;
                }
            endforeach;
            
            return $count;
        }

    }
?>
<!DOCTYPE html>
<html lang='zxx'>
<head>
	<title>AtopoOil Store </title>
	<!-- Meta tag Keywords -->
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta charset='UTF-8' />
	<meta name='keywords' content='Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design'
	/>
	<script>
		addEventListener('load', function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

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
	 <!-- <link href="css1/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css1/font-awesome.min.css" rel="stylesheet">
	<link href="css1/main.css" rel="stylesheet">
	<link href="css1/responsive.css" rel="stylesheet">
	<link href="css1/style.css" rel="stylesheet">
	<!-- web fonts -->
	<!-- <link href='//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext' rel='stylesheet'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese'
	    rel='stylesheet'> -->
	<!-- //web fonts -->

</head>
	<!-- <style type="text/css">
		
		.cart {
	float:right;
	font-weight:bold;
	position:relative;
	}
.cart a {
	color:green;
	}	
	</style> -->
<body>
	<!-- top-header -->
	<div class='agile-main-top'>
		<div class='container-fluid'>
			<div class='row main-top-w3l py-2'>
				<div class='col-lg-4 header-most-top'>
					<p class='text-white text-lg-left text-center'>A.U.D Primary School, Ejigbo Road Iwo
						<i class='fas fa-shopping-cart ml-1'></i>
					</p>
				</div>
				<div class='col-lg-8 header-right mt-lg-0 mt-2'>
					<!-- header lists -->
					<ul>
						
						<li class='text-center border-right text-white'>
							<i class='fas fa-phone mr-2'></i>08037425232
						</li>
						<li class='text-center border-right text-white'>
							<i class='fas fa-marker mr-2'></i>7AM
						</li>
						<li class='text-center border-righ text-white'>
							
								<i class='fas fa-email mr-2'></i><span class="border-right">atopooilcompany@gmail.com</span></a>
						</li>
						<li class='text-center border-right text-white'>
							<a href='#' data-toggle='modal' data-target='#exampleModal' class='text-white'>
								<i class='fas fa-sign-in-al mr-2'></i>  Log In </a>
						</li>
					<!-- 	<li class='text-center text-white'>
							<a href='#' data-toggle='modal' data-target='#exampleModal2' class='text-white'>
								<i class='fas fa-sign-out-alt mr-2'></i>Register </a>
						</li> -->
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- modals -->
	<!-- log in -->
	<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-hidden='true'>
		<div class='modal-dialog' role='document'>
			<div class='modal-content'>
				<div class='modal-header'>
					<h5 class='modal-title text-center'>Log In</h5>
					<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
					</button>
				</div>
				<div class='modal-body'>
					<form action='admin.php' method='post'>
						<div class='form-group'>
							<label class='col-form-label'>Email</label>
							<input type='text' class='form-control' placeholder='email ' name='email' required=''>
						</div>
						<div class='form-group'>
							<label class='col-form-label'>Password</label>
							<input type='password' class='form-control' placeholder='password ' name='password' required=''>
						</div>
						<div class='right-w3l'>
							<input type='submit' name='submit' class='form-control' value='Submit'>
						</div>
						<div class='sub-w3l'>
							<div class='custom-control custom-checkbox mr-sm-2'>
								<input type='checkbox' class='custom-control-input' id='customControlAutosizing'>
								<label class='custom-control-label' for='customControlAutosizing'>Remember me?</label>
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>
	

	<!-- header-bottom-->
	<div class='header-bot'>
		<div class='container'>
			<div class='row header-bot_inner_wthreeinfo_header_mid'>
				<!-- logo -->
				<div class='col-md-3 logo_agile'>
					<h1 class='text-center'>
						<a href='index.php' class='font-weight-bold font-italic'>
							<img src='images/logo2.png' alt='' class='img-fluid'>AtopoOil Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class='col-md-9 header mt-4 mb-md-0 mb-4'>
					<div class='row'>
						<!-- search -->
						<div class='col-10 agileits_search'>
							<form class='form-inline' action='#' method='post'>
								<input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search' required>
								<button class='btn my-2 my-sm-0' type='submit'>Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<!-- <a href="cart.php"><button class='btn w3view-cart' type='submit' name='submit' value=''><i class='fas fa-cart-arrow-down'></i><span class="badge"></span></button></a> -->
						<!-- <div class='col-2 top_nav_right text-center mt-sm-0 mt-2'>
							<div class='wthreecartaits wthreecartaits2 cart cart box_1' id="cart1">
								<form action='cart.php' method='post' class='last'>
									<input type='hidden' name='cmd' value='_cart'>
									<input type='hidden' name='display' value='1'>
									<button class='btn w3view-cart' type='submit' name='submit' value=''>
										<i class='fas fa-cart-arrow-down'></i>
									</button>
								</form>
								<a href="cart.php"><button class='btn w3view-cart' type='submit' name='submit' value=''>
										<i class='fas fa-cart-arrow-down'></i>
									</button></a>
							</div>
						</div> -->
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class='navbar-inner'>
		<div class='container'>
			<nav class='navbar navbar-expand-lg navbar-light bg-light'>
				<div class='agileits-navi_search'>
					<form action='#' method='post'>
						<select id='agileinfo-nav_search' name='agileinfo_search' class='border' required=''>
							<option value=''>All Categories</option>
								<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from type_tb ");
				 while($r=mysqli_fetch_array($select)){
	echo"<option value='Televisions'>".$r['type_name']." </option>
								
	
		";
};
			
				?>
							
							<!-- <option value='Headphones'>Headphones</option>
							<option value='Computers'>Computers</option>
							<option value='Appliances'>Appliances</option>
							<option value='Mobiles'>Mobiles</option>
							<option value='Fruits &amp; Vegetables'>Tv &amp; Video</option>
							<option value='iPad & Tablets'>iPad & Tablets</option>
							<option value='Cameras & Camcorders'>Cameras & Camcorders</option>
							<option value='Home Audio & Theater'>Home Audio & Theater</option> -->
						</select>
					</form>
				</div>
				<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
				    aria-expanded='false' aria-label='Toggle navigation'>
					<span class='navbar-toggler-icon'></span>
				</button>
				<div class='collapse navbar-collapse' id='navbarSupportedContent'>
					<ul class='navbar-nav ml-auto text-center mr-xl-5'>
						<li class='nav-item active mr-lg-2 mb-lg-0 mb-2'>
							<a class='nav-link' href='index.php'>Home
								<span class='sr-only'>(current)</span>
							</a>
						</li>
							<?php
	 			
          require("conn.php");

					$n=0;
					$select = mysqli_query($con, "SELECT * FROM `type_tb`  ");
					while($r=mysqli_fetch_array($select)){
						 $n++;
	                 $id=$r['type_id'];
	                 $_SESSION['id']=$id;
					echo"
					<li class='nav-item  mr-lg-2 mb-lg-0 mb-2'>
							<a class='nav-link' href='product.php?tid=".$r['type_id']."' >
							".$r['type_name']."
							</a>
							
						</li>
						
					
					";
				}
					?>
						<!-- <li class='nav-item  mr-lg-2 mb-lg-0 mb-2'>
							<a class='nav-link' href='lubcom.php' >
								Lubcom Oil
							</a>
							
						</li>
						<li class='nav-item  mr-lg-2 mb-lg-0 mb-2'>
							<a class='nav-link ' href='ammasco.php'>
								Ammasco Oil
							</a>
							
						</li> -->
						
						<li class='nav-item mr-lg-2 mb-lg-0 mb-2'>
							<a class='nav-link' href='about.php'>About Us</a>
						</li>
						
						<li class='nav-item'>
							<a class='nav-link' href='contact.php'>Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

</body>
</html>