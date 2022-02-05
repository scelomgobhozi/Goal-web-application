<?php 
session_start();

if (isset($_SESSION['uid'])){
    
    $uid = $_SESSION['uid'];
    include "../classes/dbh.classes.php";
    include "../classes/goals.php";

    $setGoal = new Showgoals;
    $setGoal->showallgoals($uid);


 
}

