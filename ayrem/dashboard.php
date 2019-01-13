<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php include('userindex.php'); ?>
<br><br>
<div class="container">
  
<div class="row">

  <div class="col-lg-12 col-md-12 mb-6">
    <!--Card-->
    <div class="card card-cascade wider mb-4">
        <h2 class="text-center ">What do you want to do</h2>
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
           <?php 
   require('conn.php');
    $typ= mysqli_query($con, "SELECT * FROM `category_tb` WHERE name LIKE '%Subs%' " );
    $typ1= mysqli_query($con, "SELECT * FROM `category_tb` WHERE name like '%Data%'" );
  ?>
  <select name="typ" class="brower-default custom-select " onchange="location = this.value;" id="typ">
    <option selected>Please select what you want to do</option>
    <?php
    while($r = mysqli_fetch_array($typ1)){
       //$cat = $r["category_id"];
      echo "<option value='viewdata.php?tid=".$r['category_id']."'>".$r['name']." </option>";
    }
    ?>
    <?php
    while($r = mysqli_fetch_array($typ)){
       $cat = $r["category_id"];
      echo "<option value='viewsubs.php?tid=".$r['category_id']."'>".$r['name']." </option>";
      //echo $cat;
    }
    ?>
   

    </select><br>
      </div>
      <?php include('foot.php'); ?>
    </div>
    <!--/.Card-->
</div>


  </div>
  

<!-- <script type="text/javascript">
    function selected(){
        //alert("done");
        var a =typ.value;
        //alert(a);
        if(a == 4 || a == 5 || a == 6)
        {
            var b ='<?php //echo "viewsubs.php?tid=$cat"  ?>';
           window.location=(b);
           }else if(a == 3) {
            window.location='viewdata.php?tid=<?php// echo $cat ?>';
            };
        };
</script> -->
</body>
</html>