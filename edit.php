<?php  
session_start();
if(!isset( $_SESSION['email'] ))
{
echo "You are probably doing something wrong";
header("Location: index.php");

}

if(!isset($_SESSION['uid']) || !isset($_GET['xm'])){
 echo "Error Loading Page";
 header("Location: index.php");

}else{
  $gid = $_GET['xm'];
  $uid = $_SESSION['uid'];
  
  
  include "classes/dbh.classes.php";
  include "classes/editgoal.class.php";
  include "classes/editgoal.contr.php";
  
  $editg = new Goaledit ($uid , $gid );
print_r($goal_info = $editg->runedit()); 
}
///// $uid =  $_SESSION['uid'];
// ///echo $uid;

///// $id =  $_GET['goalid'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"  content="set goals that are achievable">
    <meta name="keywords"   content="set goals, SMART goals">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit goal</title>
    
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
        <input type="text" class="form-control" id="goal" value="<?php echo $goal_info['goal_header'];?> " placeholder="">
        <label for="floatingInput">Goal</label>
        <span id="goalspan" class=""></span>
        </div>

    <div class="mb-3">
     <textarea placeholder="Goal description" name="" id="goaldes" cols="30" rows="10"><?php echo $goal_info['goal_description'] ?></textarea>
     <span id="goaldesspan" class=""></span>
    </div>    


    <div class="mb-3">
         <label for="">Deadline</label>
         <input type="date" name="" value="<?php echo $goal_info['deadline'] ?>" id="deadline">
         <span id="deadlinespan" class=""></span>
    </div>
    <div class="add-goal-btn-container">
    <button class="btn   add-goal-btn" id="subGoal" type="submit"><i class="bi bi-plus-circle"></i>Update</button>
      <div class="form-message"></div>
    </div>


   </form>

   </div>  --

  
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
     
<script>
'use strict';

$(document).ready(function(){ 
  



$("form").submit(function(event){
 event.preventDefault();
 var edit = <?php echo $_GET['xm']; ?>;
 var goal = $("#goal").val();
 var goaldes = $("#goaldes").val();
 var deadline = $("#deadline").val();
 var update = $("#subGoal").val();




 console.log(`goal : ${goal} || desciption: ${goaldes} || deadline ${deadline} || submit ${update}  || user id ${uid}`);
$(".form-message").load("includes/update.php",{
  edit:edit, 
  goal:goal,
  goaldes:goaldes,
  deadline:deadline,
  update:update

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