<?php

/**
* 
*/
class Database
{
	private $con;
	
	public function connect(){
		include_once("conn.php");
		$this->con = new Mysqli("localhost","root","","shop_db");
		if ($this->con) {
			return $this->con;
		}
		return "DATABASE_CONNECTION_FAIL";
	}
}

//$db = new Database();
//$db->connect();

?>