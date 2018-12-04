<?php include 'navbar.php'; ?>
	<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
                    <table class="table table-bordered table-responsive">
                        <thead class="bg-primary">
                            <th>Item</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th></th>
                        </thead>
                        <tbody>
                        <?php $total = 0; ?>
                        <?php if(isset($_SESSION['cart'])){ ?>
                            <?php foreach($_SESSION['cart'] as $row): ?>
                                <?php if($row['qty'] != 0): ?>
                                <tr>
                                    <td class="text-center"><strong><?php echo $row['product'];?></strong></td>
                                    <td class="text-center"><?php echo $row['price'];?></td>
                                    <td class="text-center">
                                        <form action="cart/data.php?q=updatecart&id=<?php echo $row['proID'];?>" method="POST">
                                        <input type="number" name="qty" value="<?php echo $row['qty'];?>" min="0" style="width:50px;"/>
                                        <button type="submit" class="btn btn-info">Update</button>
                                        </form>
                                    </td>
                                    <?php $itotal = $row['price'] * $row['qty']; ?>
                                    <td class="text-center"><font class="itotal"><?php echo $itotal; ?></font></td>
                                    <td class="text-center"><a href="cart/data.php?q=removefromcart&id=<?php echo $row['proID'];?>"><i class="fa fa-times-circle fa-lg text-danger removeproduct"></i></a></td>
                                </tr>
                                
                                <?php $total = $total + $itotal;?>  
                                <?php endif;?>
                            <?php endforeach; ?> 
                                <?php $_SESSION['totalprice'] = isset($_SESSION['totalprice']) ? $_SESSION['totalprice'] : $total; ?>
                                <?php $vat = $total * 0.12; ?>
                                <tr>
                                    <td colspan="3" class="text-right"><strong>Sub Total</strong></td>
                                    <td colspan="2" class="text-primary"><?php echo number_format($total - $vat,2) ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right"><strong>VAT (12%)</strong></td>
                                    <td colspan="2" class="text-danger"><?php echo number_format($vat,2) ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right"><strong>TOTAL</strong></td>
                                    <td colspan="2" class="text-danger"><strong><?php echo number_format($total,2) ?></strong></td>
                                </tr>
                                               
                        </tbody>
                    </table>
                    <div class="pull-right">
                        <a href="cart/data.php?q=emptycart" class="btn btn-danger btn-lg">Empty Cart!!!</a>
                        <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#checkout_modal">Check Out</a>
                    </div>
                    <?php }else{ ?>
                            <tr><td colspan="5" class="text-center alert alert-danger"><strong>*** Your Cart is Empty ***</strong></td></tr>
                            </tbody>
                        </table>
                    <?php } ?>
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
   
    <div class="container">
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
			</div>
			<!--//brand-->
		
<?php include('include/home/modal.php'); ?>
<?php include('footer.php'); ?>
<script src="js/imagezoom.js"></script>
		<!--//footer-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

	</body>
	</html>
	
