<?php
	Class session{
		public $connect;
		public $session;
		function creatConnection(){
			$this->connect=mysqli_connect("localhost", "root", "", "project");
		}
		function saveToDataBase($session){
			$result=mysqli_query($this->connect, "INSERT INTO session_bd(session) VALUES ('$session')");
				if ($result) {
					echo "SAVED ";
				}
				else{
					echo("NOT SAVED");
				}
		}
		public function displaySession_id(){
			$r=mysqli_query($this->connect, "SELECT * FROM session_bd");
			echo("<select name='id' id='id'>");
			while ($row=mysqli_fetch_assoc($r)) {
				echo("<option value=".$row["session_id"].">".$row["session"]."</option>");
			}
			echo("</select>");
		}
	}
  ?>