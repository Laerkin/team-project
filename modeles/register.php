<?php

$pdo = PDO2::getInstanceGlobal();
$success = false;
$error = null;
if(!empty($_POST)){

    $fields = array("login", "password", "email");
    $verif=true;
    foreach($fields as $f){

        if($f == 'password'){
            $pass = $_POST['password'];
            if(strlen($pass) < 4 || mb_strlen($pass) > 10){
                $error[] = "Mot de passe trop court ou trop long";
                $verif=false;
            }
        }
        if($f == 'login'){
            if(mb_strlen($_POST['login'])<3 || mb_strlen($_POST['login']>10)){
                $error[] = "Login trop court ou trop long";
                $verif=false;
            }
        }
        if(!isset($_POST[$f]) || $_POST[$f] == ""){


            $verif=false;



        }
    }


    if($verif){


        $result = $pdo->prepare("SELECT COUNT('email') AS exist FROM users WHERE email = :email");

        $result->bindValue(":email", $_POST['email']);
        $result->execute();
        $result = $result->fetch()['exist'];

        if($result == 0){
            $cr = password_hash($_POST['password'],PASSWORD_DEFAULT);


            $result = $pdo->prepare("INSERT INTO users(login,password,email,role) VALUE(:login, :password, :email,:role)");
            $result->bindValue(":login", $_POST['login']);
            $result->bindValue(":password", $cr);
            $result->bindValue(":email", $_POST['email']);
            $result->bindValue(":role", $_POST['role']);

            $success = $result->execute();
            $error = array();


        }else{
            $success = false;
            $error[] = "l'Email existe déjà";
        }
    }

}