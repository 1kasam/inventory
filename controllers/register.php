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
                case 'login':
                    $this->login();
                    break;
                case 'logout':
                    $this->logout();
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

        sleep(3);

        if (@$_POST['first'] && @$_POST['last'] && @$_POST['email'] && @$_POST['password']) {

            GLOBAL $conn;
            $user = new Usermodel();

            $user->first = Validations::inputvalidation($_POST['first']);
            $user->last = Validations::inputvalidation($_POST['last']);
            $user->email = Validations::inputvalidation($_POST['email']);
            $user->password = Validations::inputvalidation($_POST['password']);
            $user->password = md5($user->password);
            if ($user->first == null || $user->last == null || $user->email == null || $user->password == null) {
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
                $sql->bindParam(1, $user->first);
                $sql->bindParam(2, $user->last);
                $sql->bindParam(3, $user->email);
                $sql->bindParam(4, $user->password);
                $sql->execute();
                 echo "Success";
                return;
            }
        } else {
            echo "Please fll all fields!";
        }
    }

    public function login() {
        sleep(2);

        if (@$_POST['email'] && !empty(@$_POST['email']) && @$_POST['password'] && !empty(@$_POST['password'])) {

            GLOBAL $url;
            GLOBAL $conn;
            $user = new Usermodel();
            $user->email = Validations::inputvalidation($_POST['email']);
            $user->password = Validations::inputvalidation($_POST['password']);
            $user->email = Validations::validemail($user->email);
            if ($user->email == null) {
                echo "Please enter valid email";
                return;
            }

            $sql = $conn->prepare("SELECT * FROM users WHERE email ='$user->email' AND password ='" . md5($user->password) . "'");
            $sql->execute();
            if ($sql->rowCount() > 0) {
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                $user->id = $row['id'];
                $user->first = $row['first'];
                $user->last = $row['last'];
                $user->email = $row['email'];
                $user->password = $row['password'];
                session_start();
                $_SESSION['id'] = $user->id;
                //send success to AJAX
                echo "sucess";
                return;
            } else {

                echo "Wrong email or password";
            }
        } else {
            echo "There are empty Fields..";
            return;
        }
    }
    
    

    public function logout() {
        session_start();
        unset($_SESSION['id']);
        session_destroy();
        header("Location:/index");
    }

}
