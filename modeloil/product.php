<?php include('header.php'); ?>
<html lang="en" class="full-height">
    <body>

      <!-- Main navigation -->
      <header>
        <!-- Navbar -->
        <!-- Full Page Intro -->
        <div class="view">
          <?php
        require("conn.php");
        $tid= $_GET['tid'];
         $select = mysqli_query($con, "select * from type_tb where type_id='$tid'");

         while($r=mysqli_fetch_array($select)){
  echo"    
    
        <img src='".$r['type_image']."'   style='color: white ;height: 400px; width:100%'>
        
                
  
    ";
};
      
        ?>
  
        
          <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
      </header>
      <!-- Main navigation -->
      <!--Main Layout-->
    
        <div class="container">
        									<?php 
   require("conn.php");
$tid= $_GET['tid'];
$view1 = mysqli_query($con, "select * from type_tb  where type_id ='$tid'")or die(mysqli_error($con));
//$counter = 0;
while($r=mysqli_fetch_array($view1)){
	echo"<h3 class='text-center '>
				<button class='btn blue-gradient'>".$r['type_name']."</button>
				</h3>";
};
?>

          <div class='row'>
 <?php
          require("conn.php");
$tid= $_GET['tid'];
  $view = mysqli_query($con, "select * from product_tb join type_tb using (type_id) where type_id ='$tid'")or die(mysqli_error($con));
$counter = 0;
while($r=mysqli_fetch_array($view)){

 $id=$r['product_id'];
	$_SESSION['id']=$id;
  echo"    <div class='col-lg-3 col-md-12 mb-6'>
    
    <div class='card card-cascade wider mb-4'>

     
      <div class='view view-cascade'>
        <img src='".$r['proimage']."'  class='card-img-top' <span style='color: white ;height: 200px'>
        <a href='#!'>
          <div class='mask rgba-white-slight'></div>
        </a>
      </div>
     
      <div class='card-body card-body-cascade text-center'>
        <!--Title-->
        <h4 class='card-title'><strong>".$r['product_name']."</strong></h4>
        

        

       <a href='#gridSystemModal?id=".$id."''><button type='button' class='btn btn-light' data-toggle='modal' data-target='#gridSystemModal'>
  View for details
</button></a>

      </div>
      <!--/.Card content-->

    </div>
    

  </div>      
                
  
    ";
};
      
        ?>
  
 
 
  
</div>
        </div>
            									<?php 
   require("conn.php");

$view1 = mysqli_query($con, "select * from product_tb join type_tb using (type_id) ")or die(mysqli_error($con));
//$counter = 0;
while($row=mysqli_fetch_array($view1)){
		 $_SESSION['productid']=$row['product_id'];
		$_SESSION['prodname'] =$row['product_name'];
		$_SESSION['prodimage']=$row['proimage'];
		$_SESSION['proddesc'] = $row['decrip1'];
};
?>
<?php include('footer.php'); ?>
   
 <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	 <input type="text" name="" value="<?php echo  $_SESSION['productid']; ?>">
        <h4 class="modal-title" id="gridModalLabel"><?php echo $_SESSION['prodname'] ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <br>
          <div class="row">
            <div class="col-sm-9 col-example">
              
              <div class="row">
                <div class="col-8 col-sm-6 col-example">
                  <img src='<?php echo  $_SESSION['prodimage'] ?>'  class='card-img-top' <span style='color: white ;height: 200px'>
                </div>
                <div class="col-4 col-sm-6 col-example">
                  <?php echo $_SESSION['proddesc'] ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect waves-light" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
      <!--Main Layout-->

    </body>
</html>