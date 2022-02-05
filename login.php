<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


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


           <form action="" method="post">
              

               <div class="ssm-container">

               <a class="navbar-brand flogo" href="index.php">SSM <small>Login</small> </a>
               
               </div>
        
           

           <div class="form-floating mb-3">
             <input type="email" class="form-control" id="email" placeholder="name@example.com">
             <label for="floatingInput">Email address</label>
             <span class="passlenemail"></span>
           </div>

       <div class="form-floating">
         <input type="password" class="form-control" id="password" placeholder="Password">
         <label for="floatingPassword">Password</label>
         <span class="passlen">password must have aminimum of 7 charectors</span> 
         </div>
         <p> Don't have an account ? <a href="signup.php">Sign up</a> </p>
 



         <button class="btn" id="submit" type="submit" name="login" > Login </button>
         <div class="form-message"></div>
           </form>

          </div>

      </div>







  </div>



</div>

</div>
<script>
'use strict';

$(document).ready(function(){  
$("form").submit(function(event){
 event.preventDefault();

 var email = $("#email").val();
 var password = $("#password").val();
 var submit = $("#submit").val();


 console.log(`email : ${email} || password: ${password} || submit ${submit}`);
$(".form-message").load("includes/login.php",{
  email:email,
  submit:submit,
  password:password,


});



 });
});

</script>

<?php  include "includes/scripts.php"  ?>
</body>
</html>