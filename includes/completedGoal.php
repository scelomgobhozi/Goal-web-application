<?php 
session_start();

if (isset($_POST['cid'])){
  
 $uid = $_SESSION['uid'];
 $id = $_POST['cid'];

 include "../classes/dbh.classes.php";
 include "../classes/completedGoal.class.php";
 include "../classes/completedGoal.contrl.php";
 
 $done = new GoalCompleteContr($uid,$id);
 $done->loadCompleted();




} 