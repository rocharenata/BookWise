<?php

require 'dados.php'; // Importa os dados de livros

$id = $_REQUEST['id']; // Pega o ID do livro da requisição (GET ou POST)

$filtrado = array_filter($livros, function($livro) => $livro['id'] == $id; // Filtra o livro pelo ID
});

$livros = array_pop($filtrado);

echo "<pre>";
var_dump($livros); // Exibe o resultado do filtro para depuração
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-950 text-stone-400">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/livros.php" class="font-semibold hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space--y-6">
    ID do Livro <?=$id?>
    </main>
</body>
</html>