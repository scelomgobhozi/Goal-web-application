<?php
class Login extends Dbh{
 protected function getUser($email,$pwd){
 $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?');
 

 if(!$stmt->execute(array($email))){
     $stmt = null;
     exit;
 }




  if($stmt->rowCount()== 0){
    ?> 
         <script> 
         $(".passlenemail , .passlen ").text('Incorrect email or password');
         $(".passlenemail , .passlen").css('display','block');
         $("#email , #password").addClass("errorL");



        //  $(".passlen").text('passwords field connot be empty');
        //  $(".passlen").css('display','block');
        //  $("#password").addClass("errorL");
         </script>  
         <?php
         exit();

    
  }
 $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
 print_r($pwdHashed);
 $checkpwd = password_verify($pwd,$pwdHashed[0]["password"]);
 if($checkpwd == false){
     $stmt = null;
    
     ?> 
     <script> 
     $(".passlenemail , .passlen ").text('Incorrect email or password');
     $(".passlenemail , .passlen").css('display','block');
     $("#email , #password").addClass("errorL");



     </script>  
     <?php
     exit();

 }

 elseif($checkpwd == true){
     $stmt2 = $this->connect()->prepare('SELECT * FROM users WHERE email = ? ');
     if(!$stmt2->execute(array($email))){
         $stmt2 = null;
         echo "Failed to get email and password";
         exit();
         
     }
     echo $stmt2->rowCount();
     if($stmt2->rowCount() == 0){
         $stmt = null;
         echo "stmt failed no records found";

         ?> 
         <script> 
         $(".passlenemail , .passlen ").text('Incorrect email or password');
         $(".passlenemail , .passlen").css('display','block');
         $("#email , #password").addClass("errorL");



        //  $(".passlen").text('passwords field connot be empty');
        //  $(".passlen").css('display','block');
        //  $("#password").addClass("errorL");
         </script>  
         <?php
         exit();
     }

     $user = $stmt2->fetchAll(PDO::FETCH_ASSOC);
     session_start();
     $_SESSION['email'] = $user[0]["email"];
     $_SESSION['uid'] = $user[0]["id"];  
    //  header("location: ../includes/dashboard.php");
    echo "<script>alert('Everything went well');
    window.location.href = 'https://localhost/Goal_apk/dashboard.php';
    </script>";
 }
 
 $stmt = null;

 }


}
?>


