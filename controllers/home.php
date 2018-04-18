<?php

require_once'./models/user.php';

class Home {

    public function __construct() {

        
        
        
        //session_start();
        //if (@$_SESSION['id'] != "") {
            //$id = $_SESSION['id'];
            //global $conn;
            //$user = new Usermodel();

            //$sql = $conn->prepare("SELECT * FROM users WHERE  id ='$id'");
            //$sql->execute();
            //if ($sql->rowCount() > 0) {
                //$row = $sql->fetch(PDO::FETCH_ASSOC);
                //$user->id = $row['id'];
                //$user->first = $row['first'];
                //$user->last = $row['last'];
                //$user->email = $row['email'];
                //$user->password = $row['password'];
                //require_once('views/pages/home.php');
            //}
        //} else {
            //header('location:/index');
        //}


        session_start();
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $user = new Usermodel();
            $user->getuserbyID($id);
           
            require_once('views/pages/home.php');
        } else {
           header('location:/index');
        }
    }

}
