<?php include('header.php'); ?>
<div id='video-carousel-example2' class='carousel slide carousel-fade' data-ride='carousel'>
  <!--Indicators-->
  <ol class='carousel-indicators'>
    <li data-target='#video-carousel-example2' data-slide-to='0' class='active'></li>
    <li data-target='#video-carousel-example2' data-slide-to='1'></li>
    <li data-target='#video-carousel-example2' data-slide-to='2'></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class='carousel-inner' role='listbox'>
    <!-- First slide -->
    <div class='carousel-item active'>
      <!--Mask color-->
      <div class='view'>
        <!--Video source-->
          <img class='d-block w-100' src='images/lovely.jpg' alt='' style='height:600px;width: 100%'>
        <div class='mask rgba-indigo-light'></div>
      </div>

      <!--Caption-->
      <div class='carousel-caption' style=''>
        <div class='animated fadeInDown'>
          <!-- Card -->
             <h1 class='h3-responsive orange-text' style='color: yellow'>LUBCON OIL </h1>
          <h4  style='color:red'> Buy and sell your lubcon oil from Model Oil Limited</h4>
          <h4 style='color:red'>One Of Our Major Distributed Oil is lubcon oil</h4>
          <h4 style='color: black'>We Deliver to any State, buy now, by contact us 08037425232</h4>
          <h4 style='color: black'>Always use Model Oil Known as Atopo Oil</h4>
<!-- Card -->
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.First slide -->

    <!-- Second slide -->
    <div class='carousel-item'>
      <!--Mask color-->
      <div class='view'>
        <!--Video source-->

        <img class='d-block w-100' src='images/b2.jpg' alt='' style='height:600px;width: 100%'>
       <!--  <video class='video-fluid' autoplay loop muted>
          <source src='https://mdbootstrap.com/img/video/animation-intro.mp4' type='video/mp4' />
        </video> -->
        <div class='mask rgba-purple-slight'></div>
      </div>

      <!--Caption-->
      <div class='carousel-caption'>
        <div class='animated fadeInDown'>
           <h1 class='h3-responsive orange-text' style='color: yellow'>A-Z OIL </h1>
          <h4  style='color: black'> Buy and sell your A-Z oil from Model Oil Limited</h4>
          <h4 style='color: black'>One Of Our Major Distributed Oil is also A-Z oil</h4>
          <h4 style='color: white'>We Deliver to any State, buy now, by contact us 08037425232</h4>
          <h4 style='color: white'>Always use Model Oil Known as Atopo Oil</h4>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.Second slide -->

    <!-- Third slide -->
    <div class='carousel-item'>
      <!--Mask color-->
      <div class='view'>
        <!--Video source-->
          <img class='d-block w-100' src='images/b1.jpg' alt='' style='height:600px;width: 100%'>
        <div class='mask rgba-black-strong'></div>
      </div>

      <!--Caption-->
      <div class='carousel-caption'>
        <div class='animated fadeInDown'>
          <h1 class='h3-responsive orange-text' style='color: yellow'>AMMASCO OIL </h1>
          <h4  style='color:white'> Buy and sell your AMMASCO oil from Model Oil Limited</h4>
          <h4 style='color:white'>One Of Our Major powerful Distributed Oil is  AMMASCO oil</h4>
          <h4 style='color: white'>We Deliver to any State, buy now, by contact us 08037425232</h4>
          <h4 style='color: white'>Always use Model Oil Known as Atopo Oil</h4>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.Third slide -->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class='carousel-control-prev' href='#video-carousel-example2' role='button' data-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='sr-only'>Previous</span>
  </a>
  <a class='carousel-control-next' href='#video-carousel-example2' role='button' data-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='sr-only'>Next</span>
  </a>
  <!--/.Controls-->
</div>
<div class='bg-prim' >
	<h3 class='text-center primary-color text-white' style='height: 50px'>We Buy, Sell and distribute Lubcon, Ammasco, A-Z oil to any State in Nigeria</h3>
</div>
<!-- Card -->
<div class='container'>
	<h2 class='text-center mdb-color'><span style='color: white '>Our</span>  <span style='color: red'>Services</span></h2>
<div class='row'>
 <?php
        require("conn.php");
        //$tid= $_GET['tid'];
         $select = mysqli_query($con, "select * from type_tb ");

         while($r=mysqli_fetch_array($select)){
  echo"    <div class='col-lg-4 col-md-12 mb-6'>
    
    <div class='card card-cascade wider mb-4'>

     
      <div class='view view-cascade'>
        <img src='".$r['type_image']."'  class='card-img-top' <span style='color: white ;height: 200px'>
        <a href='#!'>
          <div class='mask rgba-white-slight'></div>
        </a>
      </div>
     
      <div class='card-body card-body-cascade text-center'>
        <!--Title-->
        <h4 class='card-title'><strong>".$r['type_name']."</strong></h4>
        

        

       <a class='btn btn-light' href='product.php?tid=".$r['type_id']."'>View for details</a>

      </div>
      <!--/.Card content-->

    </div>
    

  </div>      
                
  
    ";
};
      
        ?>
  
 
 
  
</div>

</div>
 <div class='container'>
 	 <!--Carousel Wrapper-->
<div id='carousel-with-lb' class='carousel slide carousel-multi-item' data-ride='carousel'>
  <!--Controls-->
  <div class='controls-top'>
    <a class='btn-floating btn-secondary' href='#carousel-with-lb' data-slide='prev'><i class='fas fa-chevron-left'></i></a>
    <a class='btn-floating btn-secondary' href='#carousel-with-lb' data-slide='next'><i class='fas fa-chevron-right'></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class='carousel-indicators'>
    <li data-target='#carousel-with-lb' data-slide-to='0' class='active secondary-color'></li>
    <li data-target='#carousel-with-lb' data-slide-to='1' class='secondary-color'></li>
    <li data-target='#carousel-with-lb' data-slide-to='2' class='secondary-color'></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides and lightbox-->

  <div class='carousel-inner mdb-lightbox' role='listbox'>
    <div id='mdb-lightbox-ui'></div>
    <!--First slide-->
     <div class=' carousel-item active text-center'>

    						<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from product_tb join type_tb using(type_id)  where type_id='1' LIMIT 10");
				 while($r=mysqli_fetch_array($select)){
	echo"             
      <figure class='col-md-2 d-md-inline-block'>
        <a href='images/th.jpg' data-size='1600x1067'>
          <img src='".$r['proimage']."'  class='img-fluid'>
        </a>
      </figure>

      

                  
										
	
		";
};
			
				?>
     </div> 
    <!--/.First slide-->

    <!--Second slide-->
    <div class='carousel-item text-center'>

     
      			<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from product_tb join type_tb using(type_id)  where type_id='2' LIMIT 10");
				 while($r=mysqli_fetch_array($select)){
	echo"             
      <figure class='col-md-2 d-md-inline-block'>
        <a href='images/th.jpg' data-size='1600x1067'>
          <img src='".$r['proimage']."'  class='img-fluid'>
        </a>
      </figure>

      

                  
										
	
		";
};
			
				?>

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class='carousel-item text-center'>

    
     			<?php
				require("conn.php");
				//$tid= $_GET['tid'];
				 $select = mysqli_query($con, "select * from product_tb join type_tb using(type_id)  where type_id='3' LIMIT 10");
				 while($r=mysqli_fetch_array($select)){
	echo"             
      <figure class='col-md-2 d-md-inline-block'>
        <a href='images/th.jpg' data-size='1600x1067'>
          <img src='".$r['proimage']."'  class='img-fluid'>
        </a>
      </figure>

      

                  
										
	
		";
};
			
				?>

    </div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->
</div>
</div>
<br>
<?php include('footer.php'); ?>