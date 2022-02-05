<?php 
class loadGoalinfo extends Dbh{
 
 protected function showeditG($uid , $id){
    $stmt = $this->connect()->prepare('SELECT * FROM goals WHERE  user_id = ? AND id = ?');  
    if (!$stmt->execute(array($uid,$id))) {
        
        print_r($stmt->errorInfo());
        $stmt = null;
        echo "Something went wrong while trying to fetch the goals";
        exit();
    }
    return $stmt->fetch();
  
    }


 }



