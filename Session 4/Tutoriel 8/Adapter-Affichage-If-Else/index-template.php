<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon Blog</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9fafb;
            padding: 30px;
        }

        .carte-article {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .etiquette-categorie {
            padding: 6px 12px;
            border-radius: 5px;
            color: white;
        }

        .bleu {
            background: #2563eb;
        }

        .rose {
            background: #ec4899;
        }

        .badge-special {
            background: #fef3c7;
            padding: 6px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <h1>Les derniers articles</h1>

    <?php foreach ($articles as $article): ?>

        <div class="carte-article">

            <span class="etiquette-categorie">
                <?= htmlspecialchars($article['categorie_libelle']) ?>
            </span>

            <div class="carte-contenu">

                <h3>
                    <?= htmlspecialchars($article['titre']) ?>
                </h3>

                <p>
                    <?= htmlspecialchars($article['contenu']) ?>
                </p>

                <div class="carte-meta">
                    <?= date('d M Y', strtotime($article['date_creation'])) ?>
                </div>

            </div>

        </div>

    <?php endforeach; ?>

</body>
</html>