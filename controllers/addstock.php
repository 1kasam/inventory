<?php
require_once'./models/user.php';
require_once './core/validations/formcontrols.php';


class Addstock{
    
    public function __construct(){
         session_start();
        if (@$_SESSION['id'] != "") {
            GLOBAL $url;
            if (@$url[1] != "") {
                switch ($url[1]) {
                    case 'add':
                        $this->add();
                        break;
                    default:
                        $this->errorview();
                }
            } else {

                $this->view();
            }
        } else {
            header('location:/index');
        }
        
    }
    
    public function view(){
        $id = $_SESSION['id'];
        $user = new Usermodel();
        $user->getuserbyID($id);
        require_once('views/pages/addstock.php');
    }
    
    
    public function add(){
        
        
    }
        
        
    
    
   
    
     
    
}
