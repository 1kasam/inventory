<?php


class CheckConnection{
    
    public function connection() {
         $connected = @fsockopen("www.google.com", 80);
        if (!$connected) {
           
            require_once('views/nointernet.php');
           exit();
        }
       
       
    }

}

