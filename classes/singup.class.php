<?php

class Signup extends Dbh{


protected function setUser($email,$pwd){
$stmt = $this->connect()->prepare('INSERT INTO users (email,password) VALUE (?,?)');
$hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
// $stmt->execute(array($email,$hashedpwd));

if (!$stmt->execute(array($email,$hashedpwd))) {
    $stmt = null;
    header("location: ../includes/signup.php?error=stmtfailedtoexecute");
    exit();
}
$stmt;

?>


<script>
alert("Sign up was successful");
$(".passlen",".passlenemail").css("display","none");
$("#password,#confirmPassword,#email").removeClass("errorL");
$(".passlenemail").text('');
window.location.href = "https://localhost/Goal_apk/login.php";

</script>

<?php



}

protected function checkUser($email){
$stmt = $this->connect()->prepare('SELECT email FROM users WHERE email = ?');
$stmt->execute(array($email));  

if (!$stmt->execute(array($email))) {
    $stmt = null;
    header("location: ../index.php?error=stmtfailed");
    exit();
}

if ($stmt->rowCount()>0) {
   $resultCheck = false;
}else{
    $resultCheck = true;
}
return $resultCheck;

}





}