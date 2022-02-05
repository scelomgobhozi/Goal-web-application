<?php

use function PHPSTORM_META\type;

class Completed extends Dbh
{
  public function showallAccomp($uid){
    $stmt = $this->connect()->prepare('SELECT * FROM goals WHERE  user_id = ? AND accomplished > ?');  
    if (!$stmt->execute(array($uid,0))) {
        
        print_r($stmt->errorInfo());
        $stmt = null;
        echo "Something went wrong";
        exit();
    }
 

    if($stmt->rowCount() == 0){
        echo "You have not completed any goals yet";
        exit();
    }


   while($row = $stmt->fetch()){
   ?>
   
   <div class="accomp-goals ">
    <h4> <?php   echo $row['goal_header']; ?> </h4>

       <p class="pending-p">  <?php   echo $row['goal_description']; ?> </p>

    <p>Date crated : <?php   echo $row['date_created']; ?></p>
    <p>Deadline : <?php   echo  $row['deadline']; ?></p>
    <p>Completed : <?php   echo $row['date_accomplished']; ?></p>
    
    </div>
   

   <?php 
   }
  }
}