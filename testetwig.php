<?php
require('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('teste.html');
echo $template->render([
    'nome'=> 'augusto',
    'idade' => 999
    'title' => 'bom dia',
]);