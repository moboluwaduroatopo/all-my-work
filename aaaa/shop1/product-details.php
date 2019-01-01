<?php
	include("conn.php");
	
	$prodID = $_GET['prodid'];

	if(!empty($prodID)){
		$sqlSelectSpecProd = mysqli_query($bd, "select * from product_tb  join type_tb using (type_id)  where product_id = '$prodID'") or die(mysql_error());
		$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);
		$prodname= $getProdInfo["product_name"];
		$prodcat = $getProdInfo["type_name"];
		$prodprice = $getProdInfo["price"];
		$proddesc = $getProdInfo["decrip1"];
		$prodimage = $getProdInfo["proimage"];
				}
?>
<?php include('include/home/header.php'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>
				
                
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-produc">
                            
						
							<img src="reservation/img/products/<?php echo $prodimage; ?>" />	
                                
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
							<h2 class="product"><?php echo $prodname; ?></h2>
								<p>Category: <?php echo $prodcat; ?></p>
				
								<p>Price: <span class="price"><?php echo $prodprice; ?></span></p>

                                <br>
                                
                                <a class="btn btn-default add-to-cart" id="add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                <p class="info hidethis" style="color:red;"><strong>Product Added to Cart!</strong></p>
								<p><b>Description: </b><?php echo $proddesc; ?></p>
								<p><b>Contact Info:</b> 1234567</p>
								<p><b>Email:</b> email@domain.com</p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				</div>
			</div>
		</div>
		</div>
	</section>
	
	<?php include('include/home/footer.php'); ?>