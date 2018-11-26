<?php session_start();
 function checkout(){
        $con=mysqli_connect("localhost","root","","ad10cakstore");
        $fname = $_POST['fname'];   
        $lname = $_POST['lname'];  
        $fullname = $fname.' '.$lname; 
        $contact = $_POST['contact'];   
        $address = $_POST['address'];   
        $email = $_POST['email']; 
        $item = '';
        $date = date('m/d/y h:i:s A');
      
        foreach($_SESSION['cart'] as $row):
            if($row['qty'] != 0){
                $product = '('.$row['qty'].') '.$row['product'];
                $item = $product.', '.$item;
            }
        endforeach;
        $amount = $_SESSION['totalprice'];
         $q=mysqli_query($con, "INSERT INTO order(name,contact,address,email,item,amount,status,dateOrdered,dateDelivered)VALUES('$fullname','$contact','$address','$email','$item','$amount','unconfirmed','$date','')");
    
        if ($q) {
            unset($_SESSION['cart']); 
        header("location:../success.php");
        }
        else{
            echo "failed".mysqli_error($con);
        }
    }
 ?>