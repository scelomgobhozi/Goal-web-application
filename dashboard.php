<?php  
session_start();
if(!isset( $_SESSION['email'] )){
  echo "Something went wrong";
}
$active = true;
$uid =  $_SESSION['uid'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"  content="set goals that are achievable">
    <meta name="keywords"   content="set goals, SMART goals">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    
    <!-- // fonts and bootstrap css// -->
   
    <?php  include "includes/fonts.php";  ?>
    <link rel="stylesheet" href="css/home.css">
     <link rel="stylesheet" href="css/dashboard.css">

   
</head>
<body>
     <!-- ///Navigation php file/// -->
   <?php  include "includes/dash.nav.php"  ?>

   <section class="main-content">

  




   <div class="row">

   
   <div class="col-lg-7 col-md-7 col-sm-12">

   <!-- ---------Category links -->
   <?php   include "includes/catlinks.php" ?>



   <div class="addgoal-container">
       <form class="addGform" action="" method="post">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="goal" placeholder="Goal">
        <label for="floatingInput">Goal</label>
        <span id="goalspan" class=""></span>
        </div>

    <div class="mb-3">
     <textarea placeholder="Goal description" name="" id="goaldes" cols="30" rows="10"></textarea>
     <span id="goaldesspan" class=""></span>
    </div>    


    <div class="mb-3">
         <label for="">Deadline</label>
         <input type="date" name="" id="deadline">
         <span id="deadlinespan" class=""></span>
    </div>
    <div class="add-goal-btn-container">
    <button class="btn   add-goal-btn" id="subGoal" type="submit"><i class="bi bi-plus-circle"></i>add</button>
      <div class="form-message"></div>
    </div>


   </form>

   </div>
  </div>







  <div class="col-lg-5 col-md-5 col-sm-12">
      <div class="b-goal">
          <h4>Goals</h4>
          <div class="goals-list">
               

               <!-- hello -->
              
      






          </div>



      </div>




  </div>


</div>









   </section>

<?php  if($active == true){
?>

 <script>
     $(document).ready(function () {
          $(".add-goal").css("background-color","rgb(105, 163, 238)");
     });
    
 </script>
<?php
}
  
?>      
     
<script>
'use strict';

$(document).ready(function(){  
$("form").submit(function(event){
 event.preventDefault();
 var uid = "<?php echo $uid; ?>";
 var goal = $("#goal").val();
 var goaldes = $("#goaldes").val();
 var deadline = $("#deadline").val();
 var goalsubmit = $("#subGoal").val();


 console.log(`goal : ${goal} || desciption: ${goaldes} || deadline ${deadline} || submit ${goalsubmit}  || user id ${uid}`);
$(".form-message").load("includes/addgoal.php",{
  uid:uid,
  goal:goal,
  goaldes:goaldes,
  deadline:deadline,
  goalsubmit:goalsubmit

});



 });

var uid = "<?php echo $uid; ?>";
 $(".goals-list").load("includes/showall.php", {
   uid:uid 
 });
});

</script>


      

  


  






    
<!-- ------------For javascripts scripts---------- -->
<?php  include "includes/scripts.php"  ?>  
</body>
</html>