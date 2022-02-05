<?php 

class Goaledit extends loadGoalinfo {
private $uid;
private $id;


public function __construct($uid,$id){
 $this->uid = $uid;
 $this->id = $id;



}


public function runedit(){
return $this->showeditG($this->uid,$this->id);    
}
    
}

