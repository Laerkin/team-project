<?php

$success=false;
$error = null;
if(!empty($_POST)){
    if($_POST['login'] !== "" && $_POST['password'] !== ""){

        $login = strip_tags($_POST['login']);
        $password = strip_tags($_POST['password']);
        $role = strip_tags($_POST['role']);

        $pdo = PDO2::getInstanceGlobal();

        $result = $pdo->prepare("SELECT * FROM users WHERE login = :login AND role = :role");

        $result->bindValue(":login", $login);
        $result->bindValue(":role", $role);

        $result->execute();

        $result = $result->fetch();

        $error = [];

        if($result == false){
            $error[]="Utilisateur ou mot de passe incorrect";
        }



        if(count($error)==0){

            $result = $pdo->prepare("SELECT * FROM users WHERE login = :login");
            $result->bindValue(":login", $_POST['login']);
            $result->execute();

            $result = $result->fetch();

            if($result){

                if(password_verify($_POST['password'],$result['password'])){

                    $_SESSION['login'] = strip_tags($result['login']);
                    $_SESSION['email'] = strip_tags($result['email']);
                    $_SESSION['id'] = strip_tags($result['id']);
                    $_SESSION['role'] = strip_tags($result['role']);
                    $success = true;



                }else{

                    $error[] = "Mot de passe incorrect";
                }
            }else{
                $error[] = "Login incorrect";
            }

        }


    }
}
