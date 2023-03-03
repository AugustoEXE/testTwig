<?php
$user = $_POST['login'];
$pass = $_POST['pass'];


if($user == 'augusto' && $pass == 'senha'){
    session_start();
    $_SESSION['user'] = 'Augusto';
    header('location:boasVindas.php');
    die;
}else{
    echo'foi de base';
    header('location:login.php?erro=1');
    die;
}