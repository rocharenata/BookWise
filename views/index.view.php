﻿<form class="w-full flex space-x-2 mt-6 mb-6">
    <input
        type="text"
        class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
        placeholder="Pesquisar..." />
    <button type="submit">🔍</button>
</form>

<!--Lista de Livros-->
<section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

    <?php foreach ($livros as $livros): ?>
        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">
            <div class="flex">
                <div class="w-1/3">Imagem</div>
                <div class="space-y-1">
                    <a href="/livros.php?id=<?= $livros['id'] ?>" class="font-semibold hover:underline"><?= $livros['titulo'] ?></a>
                    <div class="text-xs italic"><?= $livros['autor'] ?></div>
                    <div class="text-xs italic flex items-center whitespace-nowrap">⭐⭐⭐⭐⭐(3 Avaliações)</div>
                </div>
            </div>
            <div class="text-sm mt-2">
                <?= $livros['descrição'] ?>
            </div>
        </div>
    <?php endforeach; ?>


</section>