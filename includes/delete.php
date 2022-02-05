<?php  


session_start();

if(!isset( $_SESSION['email'] )){
echo "something went wrong";
}




if(isset($_GET['idgo'])){

    

echo $uid =  $_SESSION['uid'];
echo $gid = $_GET['idgo'];

include "../classes/dbh.classes.php";
include "../classes/delete.class.php";
include "../classes/delete.contr.php";

$deletegoal = new  DeleteGoalcontr($uid , $gid);
$deletegoal->rundelete();
  
}
