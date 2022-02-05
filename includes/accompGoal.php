<?php 
session_start();
if(isset($_POST['start'])){
    $uid = $_SESSION['uid'];

  include "../classes/dbh.classes.php";
  include "../classes/accompGoals.php";


  $showAccomp = new Completed;
  $showAccomp->showallAccomp($uid);
}