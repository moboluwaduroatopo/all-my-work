<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<link href="style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript">
    //  var sn = 0;
    //  sn++;
    // n = "product_id"+sn;
</script>
<body>

<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
    $item_quantity = 0;
     
?>
<div class="shopping-cart-table">
        <div class="cart-item-container header">
            <div class="cart-info title">Title</div>
            <div class="cart-info">Quantity</div>
            <div class="cart-info price">Price</div>
        </div>
<?php
            foreach ($_SESSION["shopping_cart"] as $product){
                  $item_quantity = $item_quantity + $product["quantity"];
                ?>
                <div class="cart-item-container">
            <div class="cart-info title">
                <img class="cart-image" 
                    src="<?php echo $product["proimage"]; ?>">
                    <?php echo $product["product_name"]; ?>
                </div>

            <div class="cart-info">
                        <?php echo $product["quantity"]; ?>
                    </div>

            <div class="cart-info price">
                        <?php echo "#".$product["price"]; ?>
                    </div>
           <div class="cart-info title">
                
                <p>Total</p>
                </div>
                <?php
             $total_price += ($product["price"]*$product["quantity"]);
}
?>
                <div class="cart-info price"  >
                    <strong> <?php echo "#".$total_price; ?></strong>
                      
                    </div>

        </div>
                <?php
            }
            ?>
</div>

</body>
</html>