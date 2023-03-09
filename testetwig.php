<?php
require('inc/loadTwig.php');

$template = $twig->load('teste.html');
echo $template->render([
    'nome'=> 'augusto',
    'idade' => 999,
    'title' => 'bom dia',
]);