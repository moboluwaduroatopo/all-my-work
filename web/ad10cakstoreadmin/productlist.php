
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <script type="text/javascript" src="jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="myscrip.js"></script>

<style type="text/css"> 
</style>
<body>
      <?php include 'dashboard.php'; ?>
       <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Product List</li>
      </ol>
     <div   id="margin" class="row">  
<div  class="col-md-12">
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>OrderDetail</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                     <th>NO</th>
                     <th>image</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>decript1</th>
                    <th>decript2</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>NO</th>
                     <th>image</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>decript1</th>
                    <th>decript2</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
require("conn.php");
          $n=0;
          $select = mysqli_query($con, "select * from product_tb");
          while($r=mysqli_fetch_array($select)){
             $n++;
                   $id=$r['product_id'];
                   $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td><img src='".$r['proimage']."' width=30px height =30px></td><td>".$r['product_name']."</td><td>".$r['price']."</td><td>".$r['date']."</td><td>".$r['decrip1']."</td><td>".$r['decrip2']."</td><td><a href='editproduct.php?id=".$id."'><button class='btn btn-success'>Edit</button></a></td>
<td><a href='deletestaff.php?id=".$id."'><button class='btn btn-success'>Delete</button></a></td></tr>";
}

?> </tbody>
            </table>
          </div>
        </div >
      
      </div>
  </div>
</div>
</div>
</div>
</body>
</html>