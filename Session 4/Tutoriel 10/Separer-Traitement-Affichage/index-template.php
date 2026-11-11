<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Mon premier article</title>
</head>

<body>

    <h1><?= htmlspecialchars($article['titre']) ?></h1>

    <p><?= htmlspecialchars($article['contenu']) ?></p>

</body>

</html>