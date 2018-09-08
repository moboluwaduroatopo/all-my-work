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
  height: 400px;
  margin-top: 70px; 
   margin-left: 20%
	}
	</style>
<body>
<div class="container"  id="margin">
		<form class="form-horizontal" method="post" action="acctypecon.php" enctype="multipart/form-data">
		<div class="row ">
			<div class="col-md-12">
			<div class="form-group">

     <select  name="name"  class="location  selectpicker  form-control show-tick">
     	<option id="level1"  class="level1" value="CURRENT">CURRENT</option>
     	<option  id="level2" class="level2" value="SAVING">SAVING</option>
     
     </select>
 	<input type="submit" name="" value="submit">
</div>
</div>
</div>
</form>
</div>
</body>
</html>