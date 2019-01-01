<?php

	Class myproduct{
		public $product;
		public $file;
		public $type;
		public $decri1;
		public $decri2;
        public $connect;
        

		 function connect(){

			$this->connect=mysqli_connect("localhost", "root", "", "atopooil_db");
		}
			function saveToDataBase($product,$file,$type,$decri1,$decri2){
			$result=mysqli_query($this->connect, "INSERT INTO product_tb(product_name,price,proimage,date,type_id,decrip1,decrip2) VALUES ('$product',$file',now(),'$type','$decri1','$decri2')");
				if ($result) {
					
					//echo "done ";
					header("Location:Addnewproduct.php");
				}

			else{
					echo("NOT SAVED").mysqli_error($this->connect);
				}
		}
	


	} 
  $myproduct=new myproduct();
  $myproduct->connect();
  $myproduct->saveToDataBase($_POST["product"], ('images/'.$_FILES['file']['name']), $_POST["typ"],$_POST["decri1"],$_POST["decri2"]);

 
 
?>