<?php
class loginContr extends Login{

    private $email;
    private $password;
 
   
   
    public function __construct($email ,$password ){
        $this->email = $email;
        $this->password = $password;
        
    }
   
    public function loginUsers(){

    if ($this->Empty()==false){
        exit();
    }


    if($this->empyEmail()== false){
        exit();
    }
   
    if ($this->emptypassword()==false) {
       exit();
    }

    
    
    
   
    
   
    
  
    $this->getUser($this->email,$this->password);
    
    }
   
    private function Empty(){
    if(empty($this->email) && empty($this->password)){
        ?> 
        <script> 
        $(".passlenemail , .passlen").text('please fill in the email and password');
        $(".passlenemail , .passlen").css('display','block');
        $("#email , #password").addClass("errorL");
        </script>  
        <?php
        $result = false;
          
    }else{
        $result = true;
    }
    return $result;
    }


    private function empyEmail(){
    if(empty($this->email))
    {
    
    ?> 
    <script> 
    $(".passlenemail").text('please fill in the email');
    $(".passlenemail").css('display','block');
    $("#email ").addClass("errorL");
    </script>  
    <?php
    $result = false;
   
    } else{
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
   
   
   
   
   
   
   
   }
   ?>
   <script>
       $(".passlen",".passlenemail").css("display","none");
       $("#password,#confirmPassword,#email").removeClass("errorL");
       $(".passlenemail").text('');
   </script>
