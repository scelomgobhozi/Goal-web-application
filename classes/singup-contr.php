<?php    


class signupContr extends Signup{

 private $email;
 private $password;
 private $conPassword;


 public function __construct($email ,$password ,$conPassword){
     $this->email = $email;
     $this->password = $password;
     $this->conPassword = $conPassword;
 }

 public function signupusers(){
 if($this->empyEmail()== false){
     exit();
 }

 if ($this->emptypassword()==false) {
    exit();
 }
 
 if ($this->emptyCon()== false){
    exit();
 }

 if ($this->passwordLen() == false){
 exit();
 }

 if($this->diffpasswords()==false){
     exit();
 }

 if ($this->checkUser($this->email) == false){
    ?>
    <script>
     $(".passlenemail").text('Email address is already registered');
     $(".passlenemail").css('display','block');
     $("#email").addClass("errorL");
    </script>
    <?php
    exit();
 }
 $this->setUser($this->email,$this->conPassword);
 
 }

 
 private function empyEmail(){
 if(empty($this->email))
 {
 
 ?> 
 <script> 
 $(".passlenemail").text('please fill in the email');
 $(".passlenemail").css('display','block');
 $("#email").addClass("errorL");
 </script>  
 <?php
 $result = false;

 } else{
  $result = true;   
 }
 return $result;


 }




 
 private function passwordLen(){
   
 if(strlen($this->password) < 6 ||  strlen($this->conPassword) < 6)
 {
     ?> 
     <script> 
     $(".passlen").text('password must have atleast 7 charectors');
     $(".passlen").css('display','block');
     $("#password").addClass("errorL")
     $("#confirmPassword").addClass("errorL");

     </script>  
     <?php
     $result = false;
 }

 else{
     $result = true;
   
    
 }
 return $result;
}



 
 private function diffpasswords(){
 if($this->password !=  $this->conPassword)
     {
     
      ?> 
      <script> 
      $(".passlen").text('passwords do not match');
      $(".passlen").css('display','block');
      $("#password").addClass("errorL");
      $("#confirmPassword").addClass("errorL");
      </script>  
      <?php
      $result = false;
     }
  else{
   $result = true;
  }
 return $result;

}


 
private function emptypassword(){
 if(empty($this->password))
    {
    
     ?> 
     <script> 
     $(".passlen").text('passwords field connot be empty');
     $(".passlen").css('display','block');
     $("#password").addClass("errorL");
     
     </script>  
     <?php
     $result = false;
    }
    
    else{
    $result = true;
    }

    return $result;
  }

 private function emptyCon(){
 if(empty($this->conPassword))
   {
   
   ?> 
    <script> 
    $(".passlen").text('passwords field cannot be empty');
    $(".passlen").css('display','block');
    
    $("#confirmPassword").addClass("errorL");
    </script>  
    <?php
   $result = false;
  }

  else{
    $result = true;
  }

  return $result;   

}





}
?>
<script>
    $(".passlen",".passlenemail").css("display","none");
    $("#password,#confirmPassword,#email").removeClass("errorL");
    $(".passlenemail").text('');
</script>