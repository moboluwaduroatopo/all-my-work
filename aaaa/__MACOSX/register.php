<?php 
session_start();
$errors=array();
//require('conn.php');
    Class Staff{
        public $userEmail;
        public $userName;
        public $userPass;
        public $connect;

         function connect(){

            $this->connect=mysqli_connect("localhost", "root", "", "form");
        }

         function emailExists($userEmail){
        $pre_stmt = $this->connect->prepare("SELECT id FROM form_db WHERE userEmail = ? ");
        $pre_stmt->bind_param("s",$userEmail);
        $pre_stmt->execute() or die($this->connect->error);
        $result = $pre_stmt->get_result();
        if($result->num_rows > 0){
            return 1;
        }else{
            return 0;
        }
    }
     function createUserAccount($userName,$userEmail,$userPass){
            if ($this->emailExists($userEmail)) {
            $return = "EMAIL_ALREADY_EXISTS";
            //include"userregister.php";
        }else{
            //$pwd=sha1($password);
            $result=mysqli_query($this->connect, "INSERT INTO form_db(userName,userEmail,userPass) VALUES ('$userName','$userEmail','$userPass')");
                if ($result) {
                    echo "registered";
            }else{
                    echo "failed";
        //header("Location:userregister.php");
            }
}
        }
        
            
    
    }


 $staff = new Staff();
  $staff->connect();
 echo $staff->createUserAccount($_POST["userName"], $_POST["userEmail"],$_POST["userPass"]);
 
 
 
?>


