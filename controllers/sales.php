<?php
require_once'./core/config.php';
require_once'./models/user.php';


class Sales {

    public function __construct() {
        session_start();
        if (@$_SESSION['id'] != "") {
            GLOBAL $url;
            if (@$url[1] != "") {
                switch ($url[1]) {
                    case 'getallimages':
                        $this->getallimages();
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

    
    
    public function view() {
        $id = $_SESSION['id'];
        $user = new Usermodel();
        $user->getuserbyID($id);
        require_once 'views/pages/sales.php';
    }
    

    public function errorview() {
         require_once 'views/pages/error.php';
    }
    
    
    public function add(){
        
        
    }

}
