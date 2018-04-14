<?php
require_once 'core/checkconnection.php';



class Index{
    
    public function __construct() {
         //Enable the site to check if there is internet connection
        //if(CheckConnection::connection()){
             //require_once('views/nointernet.php');
            //exit()

         require_once('views/pages/index.php');
    }
    
}

