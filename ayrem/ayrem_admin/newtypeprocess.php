<?php

	Class myproduct{
		public $type_name;
		public $price;
		public $typ;
        public $connect;

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "ayrem_db");
		}
			function saveToDataBase($type_name,$price,$typ){
			$result=mysqli_query($this->connect, "INSERT INTO type_tb(catname,price,category_id) VALUES ('$type_name','$price','$typ')");
				if ($result) {
					
					//echo "done ";
					header("Location:Addnewtype.php");
				}

			else{
					echo("NOT SAVED").mysqli_error($this->connect);
				}
		}
	


	} 
  $myproduct=new myproduct();
  $myproduct->connect();
  $myproduct->saveToDataBase($_POST["type_name"],$_POST["price"], $_POST['typ']);

 
 
?>
