<?php include_once "functions/course_class.php";
	$course=new course();
	$course->creatConnection();
	$course->saveToDataBase($_POST["ccode"],$_POST["cname"],$_POST["cdesc"],$_POST["id"]);

  ?>