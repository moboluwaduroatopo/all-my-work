<?php
session_start();
$con=mysqli_connect("localhost","root","","project");
?>
<table>
	<tr><th>No</th><th>Surname</th><th>Middlename</th><th>Last name</th><th>Email</th><th>Username</th><th>Password</th><th>Passport</th><th>Edit</th></tr>

<?php
$view = mysqli_query($con, "select * from staff_td")or die(mysqli_error($con));
while($r=mysqli_fetch_array($view)){
	$id=$r['staff_id'];
	$_SESSION['id']=$id;
	$n=0;
	$n++;
echo "<tr><td>". $n ."</td><td>".$r['surname']."</td><td>".$r['middlename']."</td><td>".$r['lastname']."</td><td>".$r['email']."</td><td>".$r['username']."</td><td>".$r['password']."</td><td><img src='".$r['passport']."' width=30px height =30px</td><td><a href='edit.php?id=".$id."'><button>Edit</button></a></td></tr></table>";
}

?>