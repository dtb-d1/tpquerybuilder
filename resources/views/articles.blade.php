<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        h1 {
            margin-bottom: 1em;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            margin: 0.5em 0;
            padding: 1em;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <header>
        <h1>Liste des Articles</h1>
    </header>

    <main>
        <ul>
            <?php foreach ($articles as $article) : ?>
                <li><?= $article->description ?> - Poids: <?= $article->poids ?> - Couleur: <?= $article->couleur ?> - Prix d'achat: <?= $article->prix_achat ?></li>
            <?php endforeach; ?>
        </ul>
    </main>

</body>

</html>
