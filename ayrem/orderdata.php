<style type="text/css">
  
</style>
<?php include('userindex.php'); ?><br>
<div class="container">
<div class="row">

  <div class="col-lg-12 col-md-12 mb-6">
    <!--Card-->
    <div class="card card-cascade wider mb-4">
        <h2 class="text-center text-success">Thank you so much for order. We're not here right now but might be responding to other people.please, kindly use this number 07069205659 to call our attention.Thanks for your patronage. </h2>
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
          
   <h2 class="text-center color-default"> </h2>

    
      </div>
    </div>
    <!--/.Card-->
</div>

</div>
  </div>
<div class="container">
	<h3 class="text-center">Your Transaction Details are as follows:</h3>
<table class="table table-sm">
  <tbody>
     <?php 
   require('conn.php');
   //echo
    $_SESSION['id'];
   //$tid= $_GET['tid'];
    $typ2= mysqli_query($con, "select * from type_tb join orderd_tb using (type_id) where orderd_id = $_SESSION[id]"); 
  ?>
    	          <?php
    while($r = mysqli_fetch_array($typ2)){
 
      echo "<tr>
        <td>Product</td>
        <td>".$r['catname']."</td>
        <tr>
        <tr>
        <td>Phone</td>
        <td>".$r['phone']."</td>
        <tr>
        <tr>
        <td>Price</td>
        <td>".$r['price']."</td>
        <tr>
        <tr>
        <td>Email</td>
        <td>".$r['email']."</td>
        <tr>
        <tr>
        <td>Transactio ID</td>
        <td>".$r['orderd_id']."</td>
        <tr>
        ";
    }
    ?>
   
   
   	
      <!-- <th   class=" text-center"></th> -->
  </tbody>
</table>

</div>