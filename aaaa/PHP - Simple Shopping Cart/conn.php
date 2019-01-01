<?php
	$conn = new mysqli("localhost", "root", "", "db_shopping");
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>