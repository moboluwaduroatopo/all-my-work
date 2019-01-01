<?php
session_start();
require(config.php);
$detail = json_decode(file_get_contents("php://input"));
$name=$detail->name;
$pwd=
//$email=$detail->email;
//$password=$detail->password;
$query=mysqli_query($con,"INSERT INTO reg(name,email.password)VALUES('$name','$email','$password')");

if($pwd == $q['password']){
    $_SESSION['username']=$name;
    echo json_encode($_SESSION);
}
else{
?>
{
    "failure":true
}
<?php
}
?>