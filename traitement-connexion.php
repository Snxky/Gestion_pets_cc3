<?php
session_start();
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['username']) || empty($_POST['password'])){
        $_SESSION['loginError'] = "Les données d'authentification sont obligatoires";
        header('Location: login.php');
        exit;
    }else{
        $statement = $pdo -> prepare('SELECT * FROM users WHERE username = :username and password = :password');
        $statement -> execute([
            ':username' => $_POST['username'],
            ':password' => $_POST['password']
        ]);
        $user = $statement -> fetch(PDO::FETCH_ASSOC);
        if($user){
            $_SESSION['username'] = $user['username'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            unset($_SESSION["loginError"]);
            header("Location: interface.php");
            exit;
        }else{
            $_SESSION['loginError'] = "Les données d'authentification sont incorrects ";
            header('Location: login.php');
            exit;
        }
    }
}