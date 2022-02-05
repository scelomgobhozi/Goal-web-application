<?php 
if(isset($_POST['uid'])){
 $uid = $_POST['uid'];
 
 include "../classes/dbh.classes.php";   
 include "../classes/pending.class.php";

 $pendingG = new PendingGoals;
 $pendingG->showGoals($uid);


}else{
 echo "we have nothing this side Sir";
}