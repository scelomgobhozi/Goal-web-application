<?php  
session_start();


if(!isset( $_SESSION['email'] )){
    echo "You are probably doing something wrong";
}
$active = true;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"  content="set goals that are achievable">
    <meta name="keywords"   content="set goals, SMART goals">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accomplished Goal</title>
    
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


   





<!-- --------------------Accomplished goals---------------------- -->
 


<!-- <div class="goal-accom-wrapper"> -->
   <div class="col-lg-7 col-md-12 col-sm-12">
          <!-- ---------Category links -->
   <?php   include "includes/catlinks.php" ?>

   <div class="addgoal-container">



    

   </div>
  </div>
<!-- </div> -->






<div class="col-lg-5 col-md-12 col-sm-12">
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


$(document).ready(function(){
<?php if($active == true){
?>


$(".accomplished-goals").css("background-color","rgb(105, 163, 238)");
     
    

<?php
}
  
?>  



console.log("File is ready");

var start = true;
$(".addgoal-container").load("includes/accompGoal.php",{
    start:start
});



 $(".goals-list").load("includes/showall.php");
});







</script>
  


  






    
<!-- ------------For javascripts scripts---------- -->
<?php  include "includes/scripts.php"  ?>  
</body>
</html>