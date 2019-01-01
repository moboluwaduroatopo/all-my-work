 <?php include 'cart_list.php'; ?>

<?php 
Class product {
    public $connect;
        
        function creatConnection(){
            $this->connect=mysqli_connect("localhost","root","","ad10cakstore");
        }
       
        function saveToDataBase($customer_name,$amount,$address,$city,$state,$zip,$country,$payment_type,$order_status){
            $key = sha1(customer_name." ".rand(1000,1000000));
       $result=mysqli_query($this->connect, "INSERT INTO order_tb(customer_name,amount,address,city,state,zip,country,payment_type,
       order_status,order_at,keyd) VALUES('$customer_name','$amount','$address','$city','$state','$zip','$country','$payment_type','$order_status',now(),'$key')");
                    
                if (!empty ($result)) 
                {
                    
                    //  include"sale.php";
                    
                    echo "SAVED ";
                     //header("Location:sale.php");
                    $fetchID = mysqli_query($this->connect,"select order_id from order_tb where keyd = '$key'");
                    while($fid = mysqli_fetch_array($fetchID))
                    {
                       
                        $oid=$fid['order_id'];
                    }
           
                       $product_id=2;
                    if (! empty($_SESSION['shopping_cart']) ){
                    if (! empty($_SESSION['shopping_cart']) ){

                    foreach ($_SESSION["shopping_cart"] as $product){

                        //$pid =$POST_['product_id'.$product];
                        //$quantity =$POST_['quantity'.$product];
                    //for($i=0; $i<count($product); $i++) {

                        $result1=mysqli_query($this->connect,"INSERT INTO order_item(order_id,product_id,quantity)VALUES('$oid','$product[product_id]','$product[quantity]')");
                    // echo "<script> window.open('print.php');</script>";
                }
                }
         
              }
                else
                {
                    echo "failed".mysqli_error($this->connect);
                }
        }
                
    }    
};
    $product = new product();
    $product->creatConnection();
     $product->saveToDataBase($_POST["customer_name"],$_POST["amount"],$_POST["address"],$_POST["city"],$_POST["state"],$_POST["zip"],$_POST["country"],$_POST["payment_type"],$_POST["order_status"]);
        
?>
 

              