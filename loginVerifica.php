<?php
require("inc/pdo.inc.php");
$user = $_POST['login'];
$pass = $_POST['pass'];

$sql = $pdo->prepare('SELECT * FROM usuarios WHERE username = :usr AND senha= :pass');

$sql->bindParam(':usr', $user);
$sql->bindParam(':pass', $pass);

$sql->execute();    

if ($sql->rowCount()) {
    $user = $sql->fetch(PDO::FETCH_OBJ);

    session_start();
    $_SESSION['user'] = $user->nome;
    header('location:boasVindas.php');
    
    die;
} else {
    echo 'foi de base';
    header('location:login.php?erro=1');
    die;
}