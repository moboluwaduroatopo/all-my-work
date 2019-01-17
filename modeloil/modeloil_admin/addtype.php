
<!DOCTYPE html>
<html>
<head>
	<title>Atopooilcompany</title>
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
        <li class="breadcrumb-item active">Add Categories</li>
      </ol>
     <div   id="margin" class="row">
      <div    class="col-md-6">
     	<form class="form-horizontal" method="post" action="typeprocess.php" enctype="multipart/form-data">

<fieldset>

<!-- Form Name -->
<legend style="color:#FF5500; text-align: left;">Add New Categories</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">New Categories</label>  
  <div class="col-md-8">    
  <input id="Nproduct" name="type_name" type="New product" placeholder="New categories" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">product file</label>  
  <div class="col-md-8">
  <input id="file" name="image" type="file" placeholder="choose product file" class="form-control input-md" accept="image/* " required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-6" >
    <button style="" id="singlebutton"  name="submit" class="btn btn-primary button1">save</button>
  </div>
</div>
   
</fieldset>
</form>
</div>
<div  class="col-md-6">
  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Product categories  </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                   <th>No</th>
                    <th>Name</th>
                    <th>image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </thead>
              <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
require("conn.php");
          $n=0;
          $select = mysqli_query($con, "select * from type_tb");
          while($r=mysqli_fetch_array($select)){
             $n++;
                   $id=$r['type_id'];
                   $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['type_name']."</td><td><img src='".$r['type_image']."' width=30px height =30px></td><td><a href='edittype.php?id=".$id."'><button class='btn btn-success'>Edit</button></a></td>
<td><a href='deletetype.php?id=".$id."'><button class='btn btn-success'>Delete</button></a></td></tr>";
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