<?php

require_once'./core/config.php';

class Usermodel {

    public $id;
    public $first;
    public $last;
    public $email;
    public $password;

    
    
    public function getuserbyID($id) {
        global $conn;

        $sql = $conn->prepare("SELECT * FROM users WHERE  id =?");
        $sql->execute(array($id));
        if ($sql->rowCount() > 0) {
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $this->id = $row['id'];
            $this->first = $row['first'];
            $this->last = $row['last'];
            $this->email = $row['email'];
            $this->password = $row['password'];
            return true;
            //require_once('views/pages/stockbalance.php');
        }
    }

}
