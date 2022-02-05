<?php 
class browseGoals extends Dbh
{
  public function Browse($uid){
    $stmt = $this->connect()->prepare('SELECT * FROM goals WHERE  user_id = ? AND accomplished = ?');  
    if (!$stmt->execute(array($uid , 0))) {
        
        print_r($stmt->errorInfo());
        $stmt = null;
        echo "Something went wrong while trying to fetch the goals";
        exit();
    }
    $stmt;
    if ($stmt->rowCount() === 0){
      echo "No goals found";
      exit();
    }
    while($row = $stmt->fetch()){
    ?>    
    <div class="pending-goal">
         
         <h4> <?php echo $row['goal_header'];    ?> </h4>

         <p class="pending-p"><?php echo $row['goal_description']; ?></p>

         <p class="date-created-p">Date created : <?php   echo $this->changeDate($row['date_created']); ?></p>
         <p class="deadline-p" >Deadline : <?php   echo $this->changeDate($row['deadline']); ?></p>
        

      
    </div>


    <?php
    }
  }
}

