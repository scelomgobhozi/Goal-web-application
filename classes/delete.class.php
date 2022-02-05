<?php 
class DeleteGoal extends Dbh 
{


    protected function deleteGoal( $uid , $id ){
        echo "The ID is $id";
        $stmt = $this->connect()->prepare('DELETE FROM goals WHERE  user_id = ? AND id = ?');  
    if (!$stmt->execute(array($uid,$id))) {
        
        print_r($stmt->errorInfo());
        $stmt = null;
        echo "Something went wrong while trying to fetch the goals";
        exit();
    }
    $stmt;  
   
    ?>
    <Script>


    
   
  
    alert('Goal was successfully deleted');
    window.location.href = 'https://localhost/Goal_apk/pendingGoals.php';
    </Script>;
    <?php 
    exit();
    }
    
  
      
}