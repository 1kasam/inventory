<?php

require_once'./core/config.php';
require_once'./models/user.php';
require_once './core/validations/formcontrols.php';

class Register {

    public function __construct() {
        GLOBAL $url;

        if (@$url[1] != "") {
            switch ($url[1]) {
                case 'id':
                    $this->showid();
                    break;
                case 'another':
                    $this->another();
                    break;
                case 'registeruser':
                    $this->registeruser();
                    break;
                default:
                    $this->errorview();
            }
        } else {
            $this->registerview();
        }
    }

    public function registerview() {

        require_once('views/pages/register.php');
    }

    public function errorview() {
        require_once('views/pages/error.php');
    }

   

    public function registeruser() {

        sleep(5);
        
        if (@$_POST['first'] && @$_POST['last'] && @$_POST['email'] && @$_POST['password']) {

            GLOBAL $conn;
            $user = new Usermodel();

            $user->first = Validations::inputvalidation($_POST['first']);
            $user->last = Validations::inputvalidation($_POST['last']);
            $user->email = Validations::inputvalidation($_POST['email']);
            $user->password = Validations::inputvalidation($_POST['password']);
            $user->password = md5($user->password);
            if($user->first== null || $user->last == null || $user->email == null || $user->password == null){
                echo "Thereis an empty field..";
                return;
            }

            $check = $conn->prepare("SELECT * FROM users WHERE email ='$user->email'");
            $check->execute();
            if ($check->rowCount() > 0) {
                    echo "User Already Exists";
                    return;
            } else {
                
                $sql = $conn->prepare("INSERT INTO users (first, last, email, password) VALUES(?,?,?,?)");
                $sql->execute(array($user->first, $user->last, $user->email, $user->password));
               //header('Location:/home');
                echo "Success";
                return;
                
            }
        }else{
            echo "Please fll all fields!";
        }
    }

}
