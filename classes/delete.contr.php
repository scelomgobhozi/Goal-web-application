<?php 
class DeleteGoalcontr extends DeleteGoal{
private $uid;
private $id;


public function __construct($uid,$id){
 $this->uid = $uid;
 $this->id = $id;



}


public function rundelete(){
$this->deleteGoal($this->uid,$this->id);    
}
    
}

