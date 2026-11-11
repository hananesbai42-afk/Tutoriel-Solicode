<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon Blog</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
            padding: 30px;
        }

        h1, h2 {
            color: #1f2937;
        }

        .liste-filtres {
            display: flex;
            gap: 15px;
            margin: 20px 0;
        }

        .pilule-filtre {
            text-decoration: none;
            background: white;
            color: #333;
            padding: 10px 18px;
            border-radius: 20px;
            border: 1px solid #ddd;
        }

        .pilule-filtre.actif {
            background: #2563eb;
            color: white;
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

    <h1>Mon Blog</h1>

    <!-- Filtres des catégories -->

    <section class="filtre-categories">

        <h2>Explorer par thème</h2>

        <div class="liste-filtres">

            <a href="index.php" class="pilule-filtre actif">
                Tous les articles
            </a>

            <?php foreach ($categories as $cat): ?>

                <a href="categorie.php?id=<?= $cat['id'] ?>"
                   class="pilule-filtre">

                    <?= htmlspecialchars($cat['libelle']) ?>

                </a>

            <?php endforeach; ?>

        </div>

    </section>

    <!-- Liste des articles -->

    <section>

        <h2>Les derniers articles</h2>

        <?php foreach ($articles as $article): ?>

            <div class="carte-article">

                <span class="etiquette-categorie <?php if ($article['categorie_couleur'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">

                    <?= htmlspecialchars($article['categorie_libelle']) ?>

                </span>

                <div class="carte-contenu">

                    <?php if ($article['id'] == 1): ?>

                        <small class="badge-special">
                            ⭐ À la une
                        </small>

                    <?php endif; ?>

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

    </section>

</body>
</html>