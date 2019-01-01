<?php

$con=mysqli_connect("localhost","root","","shop_db");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body>
 <div class="card mb-3">
        <div class="card-header"><h3 class="" style="text-align: center; color: white">
          <i class="fa fa-table"></i>Product Data </h3></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Product_name</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>year</th>
                    <th>image</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                     <th>No</th>
                    <th>Product_name</th>
                    <th>Price</th>
                    <th>quantity</th>
                    <th>year</th>
                    <th>image</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
$n=0;
$view = mysqli_query($con, "select * from product_tb")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
  $n++;
  $id=$r['product_id'];
  $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['product_name']."</td><td><span>#</span>".$r['price']." </td><td>".$r['quantity']." </td><td>".$r['year']."</td><td><img src='".$r['pimage']."' width=50px height =50px /></td></tr>";
}

?> </tbody>
            </table>
          </div>
        </div>
        
      </div>    
</body>
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
</html>