<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap4/dist/css/bootstrap.css">
  <script src="jquery.js"></script>
  <script src="bootstrap4/dist/js/bootstrap.js"></script>
  <link src="fontawesome/web/css/fontawesome-all.css">
  <script src="fontawesome/svg-with-js/js/fontawesome-all.js"></script>
</head>
<body style="background-color: #CDF9F8">
<br>
<div><h3 style="text-align: center;">Registration Form</h3></div>
<form role="form" method="post" action="student_registration_process.php" enctype="multipart/form-data" name="f2">
<div class="container">
	<div class="row">
		<div class="col-md-6">		
 				<div>
 				<h5 style="text-align: center">BIODATA INFORMATION</h5>
		 			<div class="panel">
		 				<div class="panel-body text-primary">
		 				<div class="form-group">
			    			<label for="surname">Surname:</label>
			   			 	<input type="text" class="form-control" id="surname" name="surname">
			 			</div>
			  			<div class="form-group">
					    	<label for="mdn">Middlename:</label>
					    	<input type="text" class="form-control" id="mdn" name="middlename">
				  		</div>
				  		<div class="form-group">
					    	<label for="lnm">Lastname:</label>
					    	<input type="text" class="form-control" id="lnm" name="lastname">
				  		</div>
				  		<div class="form-group">
  							<label for="sel1">Gender:</label>
  							<select class="form-control" id="sel1" name="gender">
    							<option>Male</option>
    							<option>Female</option>
  							</select>
						</div>
		 			</div>	
		 			</div>
		 			<h5 style="text-align: center">CONTACT INFORMATION</h5>
		 			<div class="panel panel-success">
		 				<div class="panel-body text-success">
			  			<div class="form-group">
					    	<label for="dav">Telephone No:</label>
					    	<input type="text" class="form-control" id="dav" name="number">
				  		</div>
				  		<div class="form-group">
					    	<label for="emm">E-mail Address:</label>
					    	<input type="text" class="form-control" id="emm" name="email">
				  		</div>
				  		<div class="form-group">
					    	<label for="hma">Home Address:</label>
					    	<textarea class="form-control" id="hma" name="address"></textarea>
				  		</div>
		 			</div>
		 			</div>	
		 			<h5 style="text-align: center">SPONSOR INFORMATION</h5>
		 			<div class="panel panel-success">
		 				<div class="panel-body">
		 				<div class="form-group">
			    			<label for="surname">Name:</label>
			   			 	<input type="text" class="form-control" id="surname" name="sponsorname">
			 			</div>
			  			<div class="form-group">
					    	<label for="tel">Telephone No:</label>
					    	<input type="text" class="form-control" id="tel" name="sponsorno">
				  		</div>
				  		<div class="form-group">
					    	<label for="ema">E-mail Address:</label>
					    	<input type="text" class="form-control" id="ema" name="sponsormail">
				  		</div>
		 			</div>	
		 			</div>		
 				</div>
		</div>
		<div class="col-md-6">
		<br><br>
				<div class="panel">
				<div class="panel-body text-primary">
					<label for="Username">Username:</label>
 							<div class="input-group">
 								<span class="fas fa-user fa-2x"> </span><input type="text" class="form-control" id="Username" name="username">
 							</div>
 							<label for="Password">Password:</label>
 							<div class="input-group">
 								<span class="fas fa-lock fa-2x"></span><input type="text" class="form-control" id="Password" name="password">
 							</div>
 							<label for="Password">Confirm Password:</label>
 							<div class="input-group">
 								<span class="fas fa-lock fa-2x"></span><input type="text" class="form-control" id="Password" name="password1">
 							</div>
				</div>
 				<label for="pport">Passport:</label>
 							<div class="input-group">
 								<input type="file" class="form-control" id="pport" name="passport">
 							</div>
 			</div>
		</div>
	</div>
</div>
	<div id="alert" style="text-align: center; color: red"></div>
	<button type="submit" class="btn btn-danger" style="position: relative; right:-450px">Submit</button>
	</form>
</body>
</html>