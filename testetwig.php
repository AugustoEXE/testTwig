<?php
require('loadTwig.php');

$template = $twig->load('teste.html');
echo $template->render([
    'nome'=> 'augusto',
    'idade' => 999,
    'title' => 'bom dia',
]);