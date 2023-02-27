<?php
require('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);

$produtos = [
    [
        'nome' => 'chinelo',
        'preco' => 30,
    ],
    [
        'nome' => 'camiseta',
        'preco' => 50,
    ],
    [
        'nome' => 'carro',  
        'preco' => 999,
    ],
    [
        'nome' => 'barco',  
        'preco' => 100000000,
    ],
];

$template = $twig->load("produtos.html");
echo $template->render([
    'title'=> 'produtos',
    'produtos' => $produtos,
]);