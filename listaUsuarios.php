<?php
require("inc/loadTwig.php");
require("inc/pdo.inc.php");

$sql = $pdo->prepare("SELECT nome, email, senha, username, admin FROM usuarios");
$sql->execute();

$result = $sql->fetchAll();

echo $twig->render('listaUsuarios.html',[
    'usuarios'=>$result,
]);