
<?php include('conn.php'); ?>
    	<section>
		<div class="container">
			<div class="row">
				
<?php include('include/home/header.php'); ?>
                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">All Products</h2>

	
<!--php starts here-->
<?php				
				//$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
				// if(isset($_POST['filter']))
				// {
				// 	$filter = $_POST['filter'];
				// 	$result = mysqli_query($bd, "SELECT * FROM product_tb where product_name like '%$filter%' or Description like '%$filter%' or Category like '%$filter%'");
                    
				// }
				// else
				//{
					$result = mysqli_query($bd, "SELECT * from product_tb  join type_tb using (type_id)");
                //}
					
				if($result){				
				while($row=mysqli_fetch_array($result)){
					
				$prodID = $row["product_id"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
					<a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['product_name'].'"><img src="reservation/img/products/'.$row['proimage'].'" alt="'.$row['product_name'].'" title="'.$row['product_name'].'" width="150" height="150" /></a>
                    </a>
					
					<h2><a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['product_name'].'">'.$row['product_name'].'</a></h2>
					<h2>'.$row['price'].'</h2>
					<p>Category: '.$row['type_name'].'</p>
					
					<a href="product-details.php?prodid='.$prodID.'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Details</a>
					</div>';		
					echo '</ul>';			
				}
				}
				?>

<!--php ends here-->
		</div>
        </div>
</div>
</div>
</div>
</section>

<?php include('include/home/footer.php'); ?>