<?php
$user = $_POST['login'];
$pass = $_POST['pass'];


if($user == 'augusto' && $pass == 'senha'){
    echo 'entrou mto foda';
    header('location:boasVindas.php');
    die;
}else{
    echo'sefudeukkkkkk';
    header('location:login.php?erro=1');
    die;
}