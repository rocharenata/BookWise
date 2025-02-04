<?php

function carregarController ($controller) {
    require "controllers/{$controller}.controller.php";
}

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (!$controller) $controller = 'index';

if (!file_exists("controllers/{$controller}.controller.php")) {
    if (!headers_sent()) {
        http_response_code(404);
    }
    echo "Página não encontrada";
    die();
}

carregarController($controller);
?>