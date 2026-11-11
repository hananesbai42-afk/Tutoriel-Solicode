<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon Blog</title>
</head>

<body>

    <h1>Bienvenue sur mon Blog</h1>

    <div class="grille-articles">
        
<?php foreach ($articles as $article): ?>

    <div class="carte-article">

        <h3>
            <?= htmlspecialchars($article['titre']) ?>
        </h3>

        <p>
            <?= htmlspecialchars($article['contenu']) ?>
        </p>

        <span>
            <?= htmlspecialchars($article['categorie_libelle']) ?>
        </span>

        <p>
            <?= date('d M Y', strtotime($article['date_creation'])) ?>
        </p>

    </div>

<?php endforeach; ?>

    </div>

</body>

</html>
