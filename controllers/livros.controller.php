<?php


//model
require 'dados.php'; // Importa os dados de livros


$id = $_REQUEST['id']; // Pega o ID do livro da requisição (GET ou POST)

 

// Filtra o array de livros para encontrar o livro com o ID correspondente

$filtrado = array_filter($livros, fn($l) => $l['id'] == $id);

// Pega o primeiro livro do array filtrado
$livros = array_pop($filtrado);


$view = 'livros'; // Define a view atual

require "views/template/app.php";




?>