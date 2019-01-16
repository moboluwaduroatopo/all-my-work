<?php include('dashboard.php'); ?>
<br><br>
  <div class="card">
  <?php 
   require('conn.php');
   $tid= $_GET['tid'];
    $typ1= mysqli_query($con, "select substr(name, 1, instr(name, ' ')-1) as first_name from category_tb where category_id ='$tid'" );
   // echo $tid;
  ?>
    <h5 class='card-header info-color white-text text-center py-4'>
        <?php
    while($r = mysqli_fetch_array($typ1)){
      echo "<strong>".$r['first_name']." Subscription</strong>
        <p>Renew Your ".$r['first_name']."</p>";
    }
    ?>
        
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
        <!-- Form -->
        <form class="text-center" method="post" action="viewprocess.php" style="color: #757575;">
  <?php 
   require('conn.php');
   $tid= $_GET['tid'];
    $typ= mysqli_query($con, "select * from type_tb where category_id ='$tid'" );
   // echo $tid;
  ?>
    
  <label for="materialRegisterFormLastName">Bouquet</label>
  <select class="mdb-select md-form form-control" name="typ" id="typs" searchable="Search here.." onchange="price()">
  <option value="" disabled selected>Please select Bouquet</option>


    <?php
    while($r = mysqli_fetch_array($typ)){
        $id=$r['type_id'];
       $_SESSION['id']=$id;
      echo "
      <option label='".$r['price']."' value='".$r['type_id']."'>".$r['catname']."</option>";
    }
    ?>
</select> 
<!-- <span id='price' hidden='hidden'>".$r['type_id']."</span>  -->          
 <div class="form-row">
              <div class="col">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" name="iuc" class="form-control">
                         <?php 
   require('conn.php');
   $tid= $_GET['tid'];
    $typ1= mysqli_query($con, "select substr(name, 1, instr(name, ' ')-1) as first_name from category_tb where category_id ='$tid'" );
   // echo $tid;
  ?>
    
        <?php
    while($r = mysqli_fetch_array($typ1)){
      echo "<label for='materialRegisterFormLastName'>".$r['first_name']." IUC NUMBER</label>";
    }
    ?>   
                    </div>
                  </div>
                   <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormPassword" name="phone" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <label for="materialRegisterFormPassword">Phone number</label>
                    </div>
                </div>
                </div>
            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="email" id="materialRegisterFormLastName" name="email" class="form-control">
                        <label for="materialRegisterFormLastName">Email</label>
                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" name="pwd" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" value="" id="pri" disabled="disabled">
                
                    </div>
                </div>
            </div>
            <!-- Phone number -->
            
            <!-- Sign up button -->
            <button  class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" type="submit">Continue</button>

            <!-- Social register -->
        </form>
        <!-- Form -->

    </div>
    <br>
</div>
 <script> 
  function price(){
    var i = $('#typs option:selected').attr('label');
    // var a = document.getElementById("price").innerHtml;
    // var a = $('#typs').val();
    // alert(i);
    document.getElementById('pri').value=+i;
};

</script>