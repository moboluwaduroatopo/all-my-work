<!DOCTYPE html>
<html>
<head>
	<title>single dase app</title>
	<script type="text/javascript" src="angular.js"></script>
	<script type="text/javascript" src="angular-route.js"></script>
 <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>
      <div class="container-fluid" ng-app="myApp">
     	<nav>
     		<ul>
     		<li><a href="">Home</a></li>
            <li><a href="">About</a></li>
     		</ul>
     	</nav>
     	<div ng-controller="ty"></div>
     	<h4>{{message}} </h4>
     </div> 
</body>
<script type="text/javascript">
	 var app =angular.module('myApp',['ngRoute']);
	 app.controller('ty',function($scope)
	 {
	 	$scope.message="WELCOME TO TRAVEL";
	 });
</script>
</html>