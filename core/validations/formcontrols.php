<?php


class Validations{
    
    
    public static function inputvalidation($data){
        $data = trim($data);
        $data = stripslashes($data);
        //$data = htmlspecialchars($data);
        if(empty($data)){
            return null;
        }
        return $data;
        
    }
    
    
   public static function superglobals($data){
       filter_input(INPUT_POST, $data);
   }
   
   
   
   public static function validemail($email){
       
       if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
           
               return $email;
               
            } else{
                
                return null;
            }
   }
   
   
   
   
}

