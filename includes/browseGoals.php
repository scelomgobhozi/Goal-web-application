<?php
session_start(); 
if (isset($_SESSION['uid'])){

    
    $uid = $_SESSION['uid'];

    include "../classes/dbh.classes.php";
    include "../classes/browseGoal.class.php";
   $b_Goals = new browseGoals;
   $b_Goals->Browse($uid); 
    // $setGoal2 = new browseGoals;
    // $setGoal2->Browsegoals($uid);

}
