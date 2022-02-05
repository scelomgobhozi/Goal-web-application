

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>


  <!-- /// fonts and bootstrap // -->
  <?php  include "includes/fonts.php"  ?> 
  
  <!-- /// webpage styling// -->
  <link rel="stylesheet" href="css/authorisation.css">
</head>
<body>
<?php   include "includes/singup.nav.php"; ?>
<div class="container-fluid">

<div class="content-container">
  <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 ">
          <div class="svg-container">
              <?php  include "includes/login.svg.php"  ?>

          </div>

      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 ">


      <div class="form-container">


           <form action="" method="post" class="needs-validation" novalidate>
               <div class="ssm-container">

               <a class="navbar-brand flogo" href="index.php">SSM <small>Singup</small> </a>
               
               </div>
        
           

           <div class="form-floating mb-3">
             <input type="email"  class="form-control" id="email" placeholder="name@example.com" required>
             <label for="floatingInput">Email address</label>
           <span class="passlenemail">Hello</span>
          </div>
            




        <div class="form-floating mb-3">
         <input type="password" class="form-control" id="password" placeholder="Password" required>
         <label for="floatingPassword">Password</label>
        <span class="passlen">password must have aminimum of 7 charectors</span> 
      </div>
         
         <div id="validationServer03Feedback" class="invalid-feedback">
          
         </div>

       <div class="form-floating ">
         <input type="password" class="form-control" id="confirmPassword" placeholder="Password" required>
         <label for="floatingPassword">Confirm Password</label>
         </div> 
         <span class="passlen">password must have aminimum of 7 charectors</span>

         <div id="validationServer04Feedback" class="invalid-feedback">
          
         </div>
         <p> Do you already have an account? <a href="login.php">    Login</a> </p>
 



         <button id="signup" type="submit" class="btn" name="signup">Sing up</button>
         <div class="form-message"></div>
           </form>

          </div>

      </div>







  </div>



</div>

</div>

<!-- <script src="js/index.js"></script> -->
<script>
'use strict';

$(document).ready(function(){  
$("form").submit(function(event){
 event.preventDefault();

 var email = $("#email").val();
 var password = $("#password").val();
 var conPassword = $("#confirmPassword").val();
 var submit = $("#signup").val();


 console.log(`email : ${email} || password: ${password} || conPassword ${conPassword} || submit ${submit}`);
$(".form-message").load("includes/signup.php",{
  email:email,
  submit:submit,
  password:password,
  conPassword:conPassword

});



 });
});

</script>
<?php  include "includes/scripts.php"  ?>
</body>
</html>