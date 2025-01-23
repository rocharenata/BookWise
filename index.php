<?php

$livros = [
    ['id' => 1, 'titulo' => 'Senhor dos Aneis', 'autor' => 'Tolkien', 'descrição' => 'Uma aventura épica na Terra Média.'],
    ['id' => 2, 'titulo' => 'Harry Potter', 'autor' => 'J.K. Rowling', 'descrição' => 'A história de um jovem bruxo.'],
    ['id' => 3, 'titulo' => 'O Hobbit', 'autor' => 'Tolkien', 'descrição' => 'A jornada de Bilbo Bolseiro.'],
    ['id' => 4, 'titulo' => '1984', 'autor' => 'George Orwell', 'descrição' => 'Uma distopia sobre um regime totalitário.'],
    ['id' => 5, 'titulo' => 'A Revolução dos Bichos', 'autor' => 'George Orwell', 'descrição' => 'Uma fábula sobre a corrupção do poder.'],
    ['id' => 6, 'titulo' => 'Dom Quixote', 'autor' => 'Miguel de Cervantes', 'descrição' => 'As aventuras de um cavaleiro errante.'],
    ['id' => 7, 'titulo' => 'Moby Dick', 'autor' => 'Herman Melville', 'descrição' => 'A caça à baleia branca.'],
    ['id' => 8, 'titulo' => 'Guerra e Paz', 'autor' => 'Liev Tolstói', 'descrição' => 'Um épico sobre a invasão napoleônica na Rússia.'],
    
];

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
                <li><a href="/meus-livros.php" class="font-semibold hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login.php" class="hover:underline">Fazer login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space--y-6">
        <form class="w-full flex space-x-2 mt-6 mb-6">
            <input 
                type="text"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                placeholder="Pesquisar..."
            />
            <button type="submit">🔍</button>
        </form>

        <!--Lista de Livros-->
        <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!--Livro-->
            <?php foreach ($livros as $livro): ?>
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">Imagem</div>
                    <div class="space-y-1">
                        <a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
                        <div class="text-xs italic"><?= $livro['autor'] ?></div>
                        <div class="text-xs italic flex items-center whitespace-nowrap">⭐⭐⭐⭐⭐(3 Avaliações)</div>
                    </div>
                </div>
                <div class="text-sm mt-2">
                    <?= $livro['descrição'] ?>
                </div>
            </div>
            <?php endforeach; ?>
                    
        </section>
    </main>
</body>
</html>