<!-- Modal -->
<div class="modal fade" id="form_products" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="product_form" class="form-horizontal" method="post" action="updateproduct.php" enctype="multipart/form-data" onsubmit="return false">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Date</label>
              <input type="text" class="form-control" name="added_date" id="added_date" value="<?php echo date("Y-m-d"); ?>" readonly/>
            </div>
            <div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">product name</label>  
  <div class="col-md-12">    
  <input id="Nproduct" name="product" type="New product" class="form-control input-md" value= <?php echo $r['product_name'] ?>  >
    
  </div>
          </div>
         <div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Price</label>  
  <div class="col-md-12">
  <input id="price" name="price" type="price" class="form-control input-md" value= <?php echo $r['price'] ?>  >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">product file</label>  
  <div class="col-md-12">
  <input id="file" name="file" type="file"  class="form-control input-md" accept="image/* " value=<?php echo $r['pimage'] ?> >
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Catergory</label>  
  <div class="col-md-12">
    <?php 
   require('conn.php');

    $typ= mysqli_query($con, "select * from type" );

  ?>
  <select name="typ" class="form-control">

    <?php
    while($r = mysqli_fetch_array($typ)){
      
      echo "<option value='".$r['type_id']."'>".$r['type_name']."</option>";
    }
    ?>
    
  </select>
  </div>
</div>
           <div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">quantity</label>  
  <div class="col-md-12">
  <input id="quantity" name="quantity" type="quantity" class="form-control input-md" value= <?php echo $r['quantity'] ?>  >
    
  </div>
</div>
          <button type="submit" class="btn btn-success">update Product</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>