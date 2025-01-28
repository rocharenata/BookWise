<?=$livros['titulo']?>

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