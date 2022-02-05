<?php

class UpdateGoal extends Dbh{

    protected function updateGoal($uid , $id , $goal_header , $goal_description ,$deadline){
    $stmt = $this->connect()->prepare('UPDATE goals SET goal_header = ?, goal_description = ? , deadline = ? WHERE id = ? AND user_id = ?');
    if (!$stmt->execute(array($goal_header, $goal_description , $deadline , $id , $uid))) {
        $stmt = null;
        echo "Something went wrong";
        exit();
    }
    
     $stmt;
    if($stmt->errorInfo()){
        print_r($stmt->errorCode());
    }
    
  
    
    }
    

}

