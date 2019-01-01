<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
                        <div class="list-group">
                            <?php
                
             $con=mysqli_connect("localhost","root","","ad10cakstore");

                    $n=0;
                    $select = mysqli_query($con, "SELECT * FROM `type_tb` WHERE type_id <=17 ");
                    while($r=mysqli_fetch_array($select)){
                         $n++;
                     $id=$r['type_id'];
                     $_SESSION['id']=$id;
                    echo"
                    
                        <div class='col1'>
                            <div class='h_nav'>
                                
                                    <ul>
                                        <li><a href='product.php?tid=".$r['type_id']."'>".$r['type_name']."</a></li>
                                        
                                        
                                    </ul>   
                            </div>                          
                        </div>
                    
                    ";
                }
                    ?>
                   
                        </div> 
                        <!--/category-products-->
                        </div>
                        </div>