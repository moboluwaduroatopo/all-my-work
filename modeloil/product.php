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
        

        

       <button type='button' class='btn btn-light edit_data' name='view' value='view' id='".$r['product_id']."'>
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
$tid= $_GET['tid'];
$view1 = mysqli_query($con, "select * from product_tb join type_tb using (type_id) where type_id='$tid' ")or die(mysqli_error($con));
//$counter = 0;
while($row=mysqli_fetch_array($view1)){
  $prodcat = $row["type_name"];
};
?>
<?php include('footer.php'); ?>
   
 <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	 
        <h4 class="modal-title text-center" id="gridModalLabel" ><?php echo $prodcat; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid" id="product_detail" class="image">
          <br>
          <div class="row">
            <div class="col-sm-9 col-example">
             
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
<script type="text/javascript">
  $(document).ready(function(){  
   // $(document).on('click', '.edit_data', function(){  
   //         var product_id = $(this).attr("id");  
   //         $.ajax({  
   //              url:"fetch.php",  
   //              method:"POST",  
   //              data:{product_id:product_id},  
   //              dataType:"json",  
   //              success:function(data){  
   //                   $('#gridModalLabel').html(data.product_name);  
   //                   // $('#image').val(data.proimage);  
   //                   $('#proddesc').html(data.decrip1);  
                 
   //                   // $('#product_id').val(data.id);    
   //                   $('#add_data_Modal').modal('show');  
   //              }  
   //         });  
   //    });
       $(document).on('click', '.edit_data', function(){  
           var product_id = $(this).attr("id"); 
          // var image =image.src; 
            //var img = document.getElementById('product_detail');
           if(product_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{product_id:product_id},  
                     success:function(data){  
                      console.log(data);
                            //img.src = url.createObjectURL(data);
                          $('#product_detail').html(data);  
                          
                          $('#gridSystemModal').modal('show');  
                     }  
                });  
           }            
      });  
 });   
</script>
    </body>
</html>