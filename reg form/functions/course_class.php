<?php 

Class course{
	public $connect;
		
		function creatConnection(){
			$this->connect=mysqli_connect("localhost", "root", "", "project");
		}
		function saveToDataBase($ccode,$cname,$cdesc,$session_id){
			$result=mysqli_query($this->connect, "INSERT INTO course_bd(course_code, course_title,course_description, session_id) VALUES ('$ccode','$cname','$cdesc','$session_id')");
				if ($result) {
					echo "SAVED ";

				}
				else{
					echo("NOT SAVED");
				}
		}
		function disTable(){
			 $r=mysqli_query($this->connect, "SELECT * from course_bd");
         echo "<div id='table'><table class='table'><tr><th>COURSE CODE</th><th>COURSE TITLE</th><th>COURSE DESCRIPTION</th><th></th><th></th><tr>";
         while($row=mysqli_fetch_array($r)){
          echo "<tr id='".$row['course_id']."'><td class='first'>".$row['course_code']."</td><td>".$row['course_title']."</td><td>".$row['course_description']."</td><td><button class='edit btn btn-primary'>Edit</button></td><td><button class='delete btn btn-danger'>Delete</button></td></tr>"; 
         }
          echo "</table></div>";
		}
		// public function displaySession_id(){
		// 	$r=mysqli_query($this->connect, "SELECT * FROM session_bd");
		// 	echo("<select name='id' id='id'>");
		// 	while ($row=mysqli_fetch_assoc($r)) {
		// 		echo("<option value=".$row["session_id"].">".$row["session"]."</option>");
		// 	}
		// 	echo("</select>");
		// }
	//}
}
 

 ?>
