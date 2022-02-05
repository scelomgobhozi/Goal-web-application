<?php 
class Addgoal extends Dbh{

protected function addgoal ($uid ,$goal , $goaldes , $deadline){
 $stmt = $this->connect()->prepare('INSERT INTO goals (user_id, goal_header, goal_description, deadline) 
 VALUES (?, ?, ?, ?)');
 if(!$stmt->execute(array($uid , $goal , $goaldes , $deadline))){
   
    print_r($stmt->errorInfo());
    //Something went wrong message 
    echo "Something went wrong";
     $stmt = null;
    exit();   
 }
  ?>
  <script>
  $('.form-message').css('background-color','rgba(0, 0, 139, 0.301)');
  $('.goalspan , .goaldesspan, .deadline').text("");
  $('#goal,#goaldes,#deadline').removeClass('erroL');
  $('#goal,#goaldes,#deadline').val('');
 

  </script>
  <?php
  echo "Goal added successfully";
  $stmt;   
}





}