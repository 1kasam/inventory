<?php
require_once'./models/user.php';
require_once'./core/config.php';


class Checklogin{
    
    
    public static function loginsession(){
        
         session_start();
        if (@$_SESSION['id'] != "") {
            $id = $_SESSION['id'];
            global $conn;
            $user = new Usermodel();

            $sql = $conn->prepare("SELECT * FROM users WHERE  id =?");
            $sql->execute(array($id));
            if ($sql->rowCount() > 0) {
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                $user->id = $row['id'];
                $user->first = $row['first'];
                $user->last = $row['last'];
                $user->email = $row['email'];
                $user->password = $row['password'];
                return true;
                //require_once('views/pages/stockbalance.php');
            }
        } else {
            return null;
            //header('location:/index');
        }
        
    }
    
}
