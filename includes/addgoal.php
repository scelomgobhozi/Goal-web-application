<?php 

if (isset($_POST['goalsubmit'])) {
  
 $uid = $_POST['uid'];
 $goal = $_POST['goal'];
 $goaldes = $_POST['goaldes'];
 $deadline = $_POST['deadline'];
 

include "../classes/dbh.classes.php";
include "../classes/addgoal.class.php";
include "../classes/addgoal-contr.php";
 
$addGoal = new AddgoalContr($uid, $goal,$goaldes,$deadline);
$addGoal->registerGoals();


}
