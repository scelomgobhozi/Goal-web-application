<?php

class UpdateGoalContl extends UpdateGoal{
 private $id;    
 private $uid;
 private $goal;
 private $goaldes;
 private $deadline;
 
 

 function __construct($id, $uid,$goal,$goaldes,$deadline)
 {   
     $this->id = $id;
     $this->uid = $uid;
     $this->goal = $goal;
     $this->goaldes = $goaldes;
     $this->deadline = $deadline;

 }


 public function registerGoals(){

 if($this->emptygoal() == false){ echo "empty goal"; exit();}
 if($this->emptygoaldes() == false){ echo "empty goal description"; exit();}
 if($this->emptydeadline() == false){ echo "Dead line cannot be empty my G"; exit();}
 
 ?>
 <script>
  $("#goalspan ,#goaldesspan, #deadlinespan ").text('');
  $("#deadline").removeClass("errorL");
 </script>
 <?php
  
 $this->updateGoal($this->uid ,$this->id , $this->goal , $this->goaldes , $this->deadline);

 }


protected function emptygoal(){
    if (empty($this->goal)) {
    echo"The goal is : $this->goal;"    
    ?>
     <script>
      $("#goalspan").text('Please input goal');
      $("#goal").addClass("errorL");
     </script>
    <?php
    $results = false;
    }else{
        $results =  true;
    }
    return $results;
}

protected function emptygoaldes(){
    if (empty($this->goaldes)) {
    ?>
     <script>
    
      $("#goaldesspan").text('Please input goal description');
      $("#goaldes").addClass("errorL");
     </script>
    <?php
    $results = false;
    }else{
        $results =  true;
        ?>
        <script>
       
         $("#goaldesspan").text('');
         $("#goaldes").removeClass("errorL");
        </script>
       <?php
    }
    return $results;
}



protected function emptydeadline(){
 
 if (empty($this->deadline))
  {
    ?>
    <script>
     $("#deadlinespan").text('Please set deadline');
     $("#deadline").addClass("errorL");
    </script>
   <?php
   $results = false;
   }else{
       $results =  true;
       ?>
       <script>
        $("#deadlinespan").text('');
        $("#deadline").removeClass("errorL");
       </script>
       <?php
   }
   return $results;
}



}