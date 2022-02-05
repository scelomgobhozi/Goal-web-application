<?php 
if(isset($_POST['submit']))
{
 $email = $_POST['email'];
 $password = $_POST['password'];
 $conPassword = $_POST['conPassword'];
 
//  $passLengthError = false;
//  $emptyEmail = false;
//  $emptyPass = false;
//  $passMatch = false;
 
 
include "../classes/dbh.classes.php";
include "../classes/singup.class.php"; 
include "../classes/singup-contr.php";

$singup = new signupContr($email,$password,$conPassword);

///Running error handlers and user singup
$singup->signupusers();
///Going to back to front page
// header("location:../index.php?error=none");






}


// <!-- <script>
//     $(".passlen",".passlenemail").css("display","none");
//     $("#password,#confirmPassword,#email").removeClass("errorL");
// </script> -->





