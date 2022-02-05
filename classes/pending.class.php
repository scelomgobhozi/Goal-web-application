<?php 
class PendingGoals extends Dbh
{
  public function showGoals($id){
    $stmt = $this->connect()->prepare('SELECT * FROM goals WHERE  user_id = ? AND accomplished = ?');  
    if (!$stmt->execute(array($id , 0))) {
        
        print_r($stmt->errorInfo());
        $stmt = null;
        echo "Something went wrong ";
        exit();
    }
    

    if($stmt->rowCount() == 0){
        echo "No pending goals available";
        exit();
    }


   while($row = $stmt->fetch()){
   ?>
 <div class="pending-goal">
         
         <h4> <?php echo $row['goal_header'];    ?> </h4>

         <p class="pending-p"><?php   echo $row['goal_description']; ?></p>

         <p class="date-created-p">Date created : <?php   echo $this->changeDate($row['date_created']); ?></p>
         <p class="deadline-p" >Deadline : <?php   echo $this->changeDate($row['deadline']); ?></p>
         <span> <input type="checkbox" name="" value="<?php echo $row['id'];?>" class="status"> <label> Accomplished </label> </span>
         <span class="accompL" ></span>
         <div class="pending-btn-container">
         <a class="deletebtn btn btn-primary" href="includes/delete.php?idgo=<?php echo $row['id']; ?>">Delete</a>

        
            <a class="btn p-e-btn" id="edita"   href="edit.php?xm=<?php echo $row['id']; ?>">Edit</a> 
         </div>

           
            
        
   

         
       

  

     </div>

  
   <?php

   }

  ?>

<script>
    $('.status').on('change',function(){
    var cid =  $(this).val();
    $(".accompL").load('includes/completedGoal.php',{cid:cid});
    // confirm("Are you sure you have accomplished this goal?");  
      
    // var formData = {cid:cid};
    // $.ajax({url : 'includes/completedGoal.php', type: 'POST' , data :formData ,success: function(event){
    //   alert('Everything went well suprisengly ');
    // }});
    });
   
   </script>
   <?php
    
  }
}