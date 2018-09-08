<?php
//  $con= mysqli_connect("localhost", "root", "", "onlinebank");
// $result= mysqli_query($con, "insert into acctype_td(acctype_name) values ('$_POST[name]')");
// if ($result) {
					
// 					echo "SAVED ";
// 				}

// 			else{
// 					echo("NOT SAVED");
// 				};
 $name=$_POST["name"];
	Class Admin{
		
		public $name;
		public $conn;

		public function nam($n){
			$this->name=$n;
		}
		public function connec(){

			$this->conn=mysqli_connect("localhost", "root", "", "onlinebank")or die('unable to connect');
		}
			public function saveToDataBase(){
			$result = mysqli_query($this->conn, "insert into acctype_td (acctype_name) values ('$this->name')") or die(mysqli_error($this->conn));
				if ($result) {
					
					echo "SAVED ";
				}

			else{
					echo("NOT SAVED");
				}
		}
        
		public function display(){

		}

	
	

	} 
  $admin=new admin();
  $admin->connec();
 $admin->nam($name);
  $admin->saveToDataBase($name);

?>
 