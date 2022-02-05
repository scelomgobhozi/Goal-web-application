<?php  
session_start();
if(!isset( $_SESSION['email'] )){
    echo "You are probably doing something wrong";
}

$uid =  $_SESSION['uid'];


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
    <title>Browse</title>
    
    <!-- // fonts and bootstrap css// -->
   
    <?php  include "includes/fonts.php";  ?>
    <link rel="stylesheet" href="css/home.css">
     <link rel="stylesheet" href="css/dashboard.css">

   
</head>
<body>
     <!-- ///Navigation php file/// -->
   <?php  include "includes/dash.nav.php"  ?>

   <section class="main-content">

   <div class="row" >





   





<!-- --------------------Accomplished goals---------------------- -->
 


<!-- <div class="goal-accom-wrapper"> -->
   <div class="col-lg-7 col-md-7 col-sm-12">
          <!-- ---------Category links -->
   <?php   include "includes/catlinks.php" ?>

   <div class="addgoal-container">



    

   </div>
  </div>
<!-- </div> -->
<div class="col-lg-5 col-md-12 col-sm-12">
      <div class="b-goal">
          <h4>Quote of the day</h4>
          <div class="goals-list">

              <p>"Wheather you think you can or cant you are right" <br>
              Unkown</p>


      






          </div>



      </div>



</div>
  </div>





 












   </section>
<?php  if($active == true){
?>

 <script>
     $(document).ready(function () {
          $(".browse-goal").css("background-color","rgb(105, 163, 238)");
     });
    
 </script>
<?php
}
  
?>        
  
    

      
<script>
$(document).ready(function(){

var user = "<?php echo $uid; ?>";
$(".addgoal-container").load("includes/browseGoals.php", {
user:user
});

});





</script>
  


  






    
<!-- ------------For javascripts scripts---------- -->
<?php  include "includes/scripts.php"  ?>  
</body>
</html>