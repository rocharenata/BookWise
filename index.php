<?php

echo "Request - Sempre cai no index.php";

require 'dados.php'; // Importa os dados de livros

$controller = 'index'; // Define o controller atual

// Verifica se foi passado um controller via URL
if (isset($_SERVER['PATH_INFO'])) {
    $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
}

// Inclui o controller correspondente
require "controllers/{$controller}.controller.php"; // Importa o controller correspondente

?>