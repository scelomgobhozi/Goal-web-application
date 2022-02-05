<?php 

class GoalCompleteContr extends GoalCompleted{
 private $uid;
 private $id;
 public function __construct($uid , $id)
 {
     $this->uid = $uid;
     $this->id = $id;
 }

 public function loadCompleted(){
     $this->finished($this->uid,$this->id);
 }

}