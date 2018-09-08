<?php 
include_Once "functions/session_class.php";
$session=new session();
$session->creatConnection();
$session->saveToDataBase($_POST["session"]);
//$session->displaySession_id();
 ?>