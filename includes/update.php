<?php 
session_start();

if(isset($_SESSION['uid']) && isset($_POST['edit']) && isset($_POST['update']))
{

$uid = $_SESSION['uid'];
$id = $_POST['edit'];
$goal = $_POST['goal'];
$goaldes = $_POST['goaldes'];
$deadline = $_POST['deadline'];

include "../classes/dbh.classes.php";
include "../classes/update.class.php";
include "../classes/update.contr.php";

$updateGoal = new UpdateGoalContl($id ,$uid, $goal,$goaldes,$deadline);
$updateGoal->registerGoals();



}else{
  echo"Failed To Update";
}