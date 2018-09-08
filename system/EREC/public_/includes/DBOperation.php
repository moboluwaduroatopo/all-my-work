<?php

/**
* 
*/
class DBOperation
{
	
	private $con;

	function __construct()
	{
		include_once("../database/db.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function addCategory($parent,$cat){
		$pre_stmt = $this->con->prepare("INSERT INTO `categories`( `category_name`, `category_image`)
		 VALUES (?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("isi",$cat,$catimage);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "CATEGORY_ADDED";
		}else{
			return 0;
		}

	}

	// public function addBrand($brand_name){
	// 	$pre_stmt = $this->con->prepare("INSERT INTO `brands`(`brand_name`, `status`)
	// 	 VALUES (?,?)");
	// 	$status = 1;
	// 	$pre_stmt->bind_param("si",$brand_name,$status);
	// 	$result = $pre_stmt->execute() or die($this->con->error);
	// 	if ($result) {
	// 		return "BRAND_ADDED";
	// 	}else{
	// 		return 0;
	// 	}

	// }

	public function addProduct($cid,$pro_name,$price,$stock,$pro_image,$date){
		$pre_stmt = $this->con->prepare("INSERT INTO `products`
			(`cid`, `product_name`, `product_price`,
			 `product_stock`, `added_date`, `p_status`)
			 VALUES (?,?,?,?,?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("iisdisi",$cid,$pro_name,$price,$stock,$date,$status);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "NEW_PRODUCT_ADDED";
		}else{
			return 0;
		}

	}

	public function getAllRecord($table){
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}
		return "NO_DATA";
	}
}

//$opr = new DBOperation();
//echo $opr->addCategory(1,"Mobiles");
//echo "<pre>";
//print_r($opr->getAllRecord("categories"));
?>