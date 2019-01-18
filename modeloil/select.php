
  <?php  
 if(isset($_POST["product_id"]))  
 {  
      $output = '';  
      require("conn.php");
      //$connect = mysqli_connect("localhost", "root", "", "testing");  
      $query = "SELECT * FROM product_tb WHERE product_id = '".$_POST["product_id"]."'";  
      $result = mysqli_query($con, $query);  
      $output .= '  
      
              
            <div class="row">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
           <div class="col-8 col-sm-6 col-example">
   <img src="'.$row["proimage"].'"  class="card-img-top" id="proimage" style="color: white ;height: 200px">
                </div>
                <div class="col-4 col-sm-6 col-example" id="proddesc">
                <h3>'.$row["product_name"].'</h3>
                 '.$row["decrip1"].'
                </div>
               
           ';  
      }  
      $output .= '  
           
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 