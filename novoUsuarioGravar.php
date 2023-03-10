<?php
require("inc/pdo.inc.php");
$user = $_POST['user'] ?? false;
$pass = $_POST['pass'] ?? false;
$name = $_POST['name'] ?? false;
$email = $_POST['email'] ?? false;
$adm = isset($_POST['admin']) ? 1 : 0;

var_dump($adm);

if (!$user || !$pass) {
    header("location:novoUsuario.php");
}
$pass = password_hash($pass, PASSWORD_BCRYPT);
$sql = $pdo->prepare("INSERT INTO usuarios (nome,email, username, senha, admin) VALUES(:nome, :email, :user, :pass, :adm)");
$sql->bindParam(':user', $user);
$sql->bindParam(':pass', $pass);
$sql->bindParam(':nome', $name);
$sql->bindParam(':email', $email);
$sql->bindParam(':adm', $adm);

$sql->execute();
if ($sql->rowCount()) {
    header("location: login.php");
    die;
} else {
    header('location: novoUsuario.php');
    die;
}