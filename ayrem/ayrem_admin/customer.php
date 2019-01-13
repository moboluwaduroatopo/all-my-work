
<!DOCTYPE html>
<html>
<head>
	<title>Ayrem</title>
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
        <li class="breadcrumb-item active">Customer</li>
      </ol>
     <div   id="margin" class="row">
    
<div  class="col-md-12">
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Customer List  </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                    <th>No</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>state</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aboutus</th>
                    <th>RegDate</th>
                    
                    <th>Delete</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>state</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aboutus</th>
                    <th>RegDate</th>
                    
                    <th>Delete</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
require("conn.php");
          $n=0;
          $select = mysqli_query($con, "select * from user_db");
          while($r=mysqli_fetch_array($select)){
             $n++;
                   $id=$r['user_id'];
                   $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['firstname']."</td><td>".$r['lastname']."</td><td>".$r['state']."</td><td>".$r['username']."</td><td>".$r['phone']."</td><td>".$r['email']."</td><td>".$r['password']."</td><td>".$r['aboutus']."</td><td>".$r['udate']."</td>
<td><a href='deletecus.php?id=".$id."'><button class='btn btn-success'>Delete</button></a></td></tr>";
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