<?php 

class Showgoals extends Dbh{
  public function showallgoals($uid){
    $stmt = $this->connect()->prepare('SELECT * FROM goals WHERE  user_id = ?');  
    if (!$stmt->execute(array($uid))) {
        
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
    <div class="goals-inner-content" >
        <h5><?php  echo $row['goal_header'];  ?></h5>
        <!-- goal_description,  -->
         <p class="date-created-p">Date created : <?php echo $this->changeDate($row['date_created']); ?></p>
         <p class="deadline-p">Deadline  : <?php echo $this->changeDate($row['deadline']); ?></p>
       
      
        <p><a class="viewlink" href="https://localhost/Goal_apk/pendingGoals.php?id=<?php echo $row['id']; ?>"> view </a></p>
        

      
    </div>


    <?php
    }

  }
  

}



// class AccomplishedGoal extends Dbh{

// public function accompGoal($id){

// $stmt = $this->connect()->prepare('UPDATE goals SET accomplished = ? WHERE id = ?');
// if(!$stmt->execute(array(1,$id))){
//     echo "Something went wrong with posting The data to database";
// }




// }

//}