<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
   <script type="text/javascript" src="jquery/jquery-3.1.1.js"></script>
<script type="text/javascript" src="jquery/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.css">
<script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
<style type="text/css">
	#margin{
	background-color: #f5f5f5;
  width: 60%;
  height: 800px;
  margin-top: 70px; 
   margin-left: 20%
	}
	</style>
<body>

   <div class="container"  id="margin">
  
   	<form id="" class="form-horizontal" method="post" action="Admin1.php" enctype="multipart/form-data">

<fieldset>

<!-- Form Name -->
<legend style="color:#FF5500">ADMIN REGISTRATION FORM</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Firstname</label>  
  <div class="col-md-6">
  <input id="firstname" name="firstname" type="text" placeholder="firstname" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Lastname</label>  
  <div class="col-md-6">
  <input id="lastname" name="lastname" type="text" placeholder="lastname" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="email" placeholder="email" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Address</label>  
  <div class="col-md-6">
  <input id="address" name="address" type="address" placeholder="address" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Password</label>  
  <div class="col-md-6">
  <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Phone</label>  
  <div class="col-md-6">
  <input id="phone" name="phone" type="phone" placeholder="phone" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton"  name="submit" class="btn btn-primary button1">Register</button>
  </div>
</div>
 <p>
    Already a Admin?  <a href="adminlogin.php" class="">login </a>
    </p>
</fieldset>
</form>
   </div>
</body>
</html>