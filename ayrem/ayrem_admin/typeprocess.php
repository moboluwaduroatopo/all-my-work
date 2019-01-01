<?php

	Class myproduct{
		public $type_name;
		public $image;
        public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "atopooil_db");
		}
			function saveToDataBase($type_name,$image){
			$result=mysqli_query($this->connect, "INSERT INTO type_tb(type_name,type_image) VALUES ('$type_name','$image')");
				if ($result) {
					
					//echo "done ";
					header("Location:addtype.php");
				}

			else{
					echo("NOT SAVED").mysqli_error($this->connect);
				}
		}
	


	} 
  $myproduct=new myproduct();
  $myproduct->connect();
  $myproduct->saveToDataBase($_POST["type_name"], ('images/'.$_FILES['image']['name']));

 
 
?>