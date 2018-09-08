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

	}
	</style>
<body>
   <div class="container" id="margin">
   	<form class="form-horizontal" method="post" action="transconnect.php" enctype="multipart/form-data">

<fieldset>

<!-- Form Name -->
<legend style="color:#FF5500">ADMIN LOGIN FORM</legend>

<!-- Text input-->


<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">transaction_type</label>  
  <div class="col-md-6">
  <input id="transaction" name="transaction" type="transaction_type" placeholder="transaction_type" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Amount</label>  
  <div class="col-md-6">
  <input id="Amount" name="amount" type="Amount" placeholder="Amount" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-6 control-label" for="textinput" id="color">Name</label>  
  <div class="col-md-6">
  <input id="Name" name="name" type="Name" placeholder="Name" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton"  name="submit" class="btn btn-primary button1">SAVE</button>
  </div>
</div>
 
</fieldset>
</form>
   </div>
</body>
</html>