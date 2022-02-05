<?php 

// $gid = $_GET['goalid'];



if(isset($_POST['uid']) && isset($_POST['id']) ){


echo "The load function is working properly";
?>
alert('We are up and running baby!!');
<?php
$gid = $_POST['id'];
$uid = $_POST['uid'];


include "../classes/dbh.classes.php";
include "../classes/editgoal.class.php";
include "../classes/editgoal.contr.php";

$editg = new Goaledit ($uid , $gid );
$editg->runedit();
// header("location: ../edit.php");
echo "we are here";
print_r("what is going on in this bitch");

}