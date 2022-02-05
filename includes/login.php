<?php    
if(isset($_POST['submit']))
{

$email = $_POST['email'];
$password = $_POST['password'];

include "../classes/dbh.classes.php";
include "../classes/login.class.php";
include "../classes/login-contr.php";

$login = new loginContr($email,$password);
$login->loginUsers();

   
}
?>


