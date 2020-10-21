<?php
require_once __DIR__. '/../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(__DIR__.'/../src/views');
$twig = new Environment($loader);

$products = ['product1', 'product2', 'product3', 'product4', 'product5'];

echo $twig->render('index.html.twig', ['products' => $products]);