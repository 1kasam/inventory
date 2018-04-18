<?php

require_once'./models/user.php';
require_once'./models/stockbalance.php';

class Stockbalance {

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

                $this->stockbalance();
            }
        } else {
            header('location:/index');
        }
    }
    
    

    
    public function stockbalance() {
        $id = $_SESSION['id'];
        $user = new Usermodel();
        $user->getuserbyID($id);
        
        require_once('views/pages/stockbalance.php');
    }
    

    public function getallimages() {
        $returndata = array();
        for ($i = 1000; $i > 0; $i--) {
            $stockdata = new Stockbalancemodel();
            $stockdata->name = "Something";
            $stockdata->img = "/split/libs/images/two.jpg";
            $stockdata->available = true;
            array_push($returndata, $stockdata);
        }
        echo json_encode(array_values($returndata));
    }

}
