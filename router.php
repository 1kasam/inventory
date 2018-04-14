<?php
require_once'./core/config.php';
//require_once('core/checkconnection.php');

Class Router {

    public static function get($controller) {
        
        GLOBAL $url;
        
        $controller = 'controllers/' . $url[0] . '.php';

        if (!file_exists($controller)) {
            
            $controller = 'controllers/errorcontrol.php';
            
            $url[0] = 'E404';
        }
        

        require $controller;
        
        $controler_name = ucfirst($url[0]);
        
        $controler = new $controler_name;
        
    }

}
