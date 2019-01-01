<HTML>
<HEAD>
<TITLE>Enriched Responsive Shopping Cart in PHP</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
     <?php include 'cart_list.php'; ?>
<div id="shopping-cart">
        
        <?php
        if (!empty($_SESSION["shopping_cart"])){
            ?>
           <?php
        } // End if !empty $cartItem
        ?>

</div>

    <form name="frm_customer_detail" action="process-order.php" method="POST">
    <div class="frm-heading">
        <div class="txt-heading-label">Customer Details</div>
    </div>
    <div class="frm-customer-detail">
        
        <div class="form-row">
            <div class="input-field">
                <input type="text" name="customer_name" id="name"
                    PlaceHolder="Customer Name" required>
            </div>

            <div class="input-field">
                <input type="text" name="address" PlaceHolder="Address" required>
            </div>
        </div>
        <!-- <div class="form-row">
            <div class="input-field">
                <input type="" name="amount" id="amount" value="<?php //echo $product_id; ?>" 
                >
            </div>
        </div> -->

            <div class="form-row">
            <div class="input-field">
                <input type="hidden" name="amount" id="amount" value="<?php echo "#".$total_price; ?>" 
                >
            </div>
           <!--  <div class="input-field">
                <input type="hidden" name="quantity" id="quantity" value=" <?php// echo $item_quantity; ?>" 
                >
            </div> -->
        </div>
        <div class="form-row">
            <div class="input-field">
                <input type="text" name="city" PlaceHolder="City" required>
            </div>

            <div class="input-field">
                <input type="text" name="state" PlaceHolder="State" required>
            </div>
        </div>

        <div class="form-row">
            <div class="input-field">
                <input type="text" name="zip" PlaceHolder="Zip Code" required>
            </div>

            <div class="input-field">
                <input type="text" name="country" PlaceHolder="Country" required>
            </div>
        </div>
         <div class="form-row">
            <div class="input-field">
                <input type="hidden" value="PAYPAL" name="payment_type" >
            </div>

            <div class="input-field">
                <input type="hidden" value="pending" name="order_status" >
            </div>
        </div>
    </div>
    <div>
        <input type="submit" class="btn-action"
                name="proceed_payment" value="Proceed to Payment">
    </div>
    </form>
</BODY>
</HTML>