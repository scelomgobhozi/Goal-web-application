<?php 
class GoalCompleted extends Dbh{

  protected function finished($uid ,$id){ 
  $date = $this->getdate();
  $stmt = $this->connect()->prepare('UPDATE goals SET accomplished = ? , date_accomplished = ? WHERE user_id = ? AND id = ?');
  if (!$stmt->execute(array(1, $date, $uid,$id))) {
        
    print_r($stmt->errorInfo());
    $stmt = null;
    echo "oops something went wrong";
    exit();


 }
 $stmt; 
 ?>
 <script> 
 var con = confirm('Please confirm if the goal has been accomplished'); 
 if(con){
   location.reload(); 
 }else{
  $('.status').prop('checked', false); 
 }

  </script>
 <?php
 
}

protected function getdate(){
$cdate= getdate();
$date_accomplished = "$cdate[mday] $cdate[month] $cdate[year]";
return $date_accomplished;
}

}