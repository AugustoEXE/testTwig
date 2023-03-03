<?php 
require('loadTwig.php');
require('verificaLogin.php');
$user = $_SESSION['user'] ?? false;

echo $twig->render('boasVindas.html', [
    'user' => $user,
]);