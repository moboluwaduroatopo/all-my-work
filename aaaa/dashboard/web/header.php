<?php session_start();

?>
<?php 
$connect=mysqli_connect("localhost","root","","shop_db");
if (isset($_SESSION["adminid"])) {
  //session_destroy();
//header("Location: adminlogin.html");?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>
<div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>Shoppy</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" class="form-control" name="search" id="search" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><?php echo"<img src='". $_SESSION['pass']."' style='width:50px; height:50px;'"; ?></span> 
												<div class="user-name">
													<p> <?php  echo $_SESSION['name']." ".$_SESSION['middle'] ; ?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											
											<li> <a href="index.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
	</div>

	<div id="result" style="margin-left: 300px" class="col-md-3">
  
</div>
</body>
<script type="text/javascript">
  $(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"search.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
<?php
} else{
  header("Location: index.php");
}
?>
</html>