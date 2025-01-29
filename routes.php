<?php

$controller = 'index';

if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}

 
if (!file_exists("controllers/{$controller}.controller.php")) {
    http_response_code(404); // Define o código de resposta HTTP para 404
    echo "Página não existe";
    die(); // Use exit() em vez de die() para garantir que nenhum outro código seja executado
}

require "controllers/{$controller}.controller.php";
 