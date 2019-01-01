
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
.project-tab {
    padding: 10%;
    margin-top: -8%;
}
.project-tab #tabs{
    background: #007b5e;
    color: #eee;
}
.project-tab #tabs h6.section-title{
    color: #eee;
}
.project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #0062cc;
    background-color: transparent;
    border-color: transparent transparent #f3f3f3;
    border-bottom: 3px solid !important;
    font-size: 16px;
    font-weight: bold;
}
.project-tab .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #0062cc;
    font-size: 16px;
    font-weight: 600;
}
.project-tab .nav-link:hover {
    border: none;
}
.project-tab thead{
    background: #f3f3f3;
    color: #333;
}
.project-tab a{
    text-decoration: none;
    color: #333;
    font-weight: 600;
}
</style>
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
        <li class="breadcrumb-item active">Order list</li>
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
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                   <th>message</th>
                    <th>Sent</th>
                    <th>Replied</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </thead>
              <tfoot>
                     <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                   <th>message</th>
                    <th>Sent</th>
                    <th>Replied</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
              </tfoot>
              <tbody>
               
             

<?php
require("conn.php");
          $n=0;
          $select = mysqli_query($con, "select * from contactus_tb");
          while($r=mysqli_fetch_array($select)){
             $n++;
                   $id=$r['contact_id'];
                   $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['name']."</td><td>".$r['email']."</td><td>".$r['message']."</td><td>".$r['datesend']."</td><td>".$r['datereplied']."</td><td><a href='edit.php?id=".$id."'><button class='btn btn-success'>Edit</button></a></td>
<td><a href='deletecontact.php?id=".$id."'><button class='btn btn-success'>Delete</button></a></td></tr>";
}

?> </tbody>
            </table>
          </div>
        </div >
      
      </div>
  </div>
  <div class="container">
    <section id="tabs" class="project-tab">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Uncomfirmed</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Comfirmed</a>
                                
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Datesend</th>
                   
                                        </tr>
                                    </thead>
                                
                                  <?php
                                    $n=0;
                                  $con=mysqli_connect("localhost","root","","atopooil_db");
                                  $saless= mysqli_query($con, "SELECT * FROM `contactus_tb` WHERE status='unconfirmed' ");

                                     while($r=mysqli_fetch_array($saless)){

  //echo $r['last_1_month'];
    //$_SESSION['cur']=$r['CURRENTDATE '];                                   
                          //$_SESSION['sales']=$r['a_day'];
  $n++;
                   $id=$r['contact_id'];
                   $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['name']."</td><td>".$r['email']."</td><td>".$r['status']."</td><td>".$r['datesend']."</td></tr>";
}

?> 
                                </table>
 
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                                               <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>DateReplied</th>
                                           
                                        </tr>
                                    </thead>

                                  <?php
                                   $n=0;
                                  $con=mysqli_connect("localhost","root","","atopooil_db");
                                 $mont= mysqli_query($con, "SELECT * FROM `contactus_tb` WHERE status='reply' ");
                       while($r=mysqli_fetch_array($mont)){

  //echo $r['last_1_month'];
    //$_SESSION['cur']=$r['CURRENTDATE '];                                   
                                             //$_SESSION['sales']=$r['a_day'];
  $n++;
                   $id=$r['contact_id'];
                   $_SESSION['id']=$id;
echo "<tr><td>". $n."</td><td>".$r['name']."</td><td>".$r['email']."</td><td>".$r['status']."</td><td>".$r['datereplied']."</td></tr>";
}

?> 
                                     

                                  
                                </table>
                            </div>
                     
                        </div>
                    </div>
                </div>
              </div>
            </section>
  </div>
</div>
</div>
</div>
</body>
</html>