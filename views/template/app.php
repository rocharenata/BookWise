<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Wise</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-950 text-stone-400">
    <header class="bg-stone-900 ">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros" class="font-semibold hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login" class="hover:underline">Fazer login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6 mt-0 pt-0">
    <?php require "views/{$view}.view.php"; // Importa a view atual ?>
    </main>
</body>

</html>