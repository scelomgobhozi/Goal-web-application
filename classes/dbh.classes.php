<?php   

class Dbh {

 protected function connect(){

  try{
    
      $username = "root";
      $password = "";
      $dbh = new PDO('mysql:host=localhost:3306;dbname=goal_webapp',$username,$password);
      return $dbh;
  }   
   catch(PDOException $e){
       print "error!: ".$e->getMessage()."<br/>";
       die();
   }
 }

 public function changeDate($date){
    //---Months in words---///    
    
        //---Months in words---///    
        $monthArr = array('01'=>'January','02'=>'February','03'=>'March','04'=>'April','05'=>'May','06'=>'June','07'=>'July','08'=>'August','09'=>'September','10'=>'October','11'=>'November','12'=>'December');
        
        
        
        //------converting the string to a array
        $sepDate = explode(" ",$date);
        
        
        
        if(count($sepDate)>0){
        $normalV = $sepDate[0];
        $newDate = explode("-",$normalV);   
        $reverseDate = array_reverse($newDate);
        
        
       
        $monthNumber = $reverseDate[1];
        
        
        $stringMonthNumber = strval($monthNumber);
        
        $wordMonth = $monthArr[$stringMonthNumber];
        
        
        $updatedDate = $reverseDate;
        
        
        $updatedDate[1]= $wordMonth;
        
        
        
        $correctFormatDate = join(" ",$updatedDate);
        
        return $correctFormatDate;
        
        }else{
        
        $newDate = explode("-",$date);  
        $reverseDate = array_reverse($newDate);
        
        
        
        $monthNumber = $reverseDate[1];
        
       
        $stringMonthNumber = strval($monthNumber);
        
        $wordMonth = $monthArr[$stringMonthNumber];
        
        
        $updatedDate = $reverseDate;
        
       
        $updatedDate[1]= $wordMonth;
        
        
       
        $correctFormatDate = join(" ",$updatedDate);
       
        return $correctFormatDate;
        }
        
        
    
    
    // echo changeDate("2022-10-10");

    }
}