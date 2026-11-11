<?php

$articles = [
    [
        'id' => 1,
        'titre' => 'Comment apprendre PHP ?',
        'contenu' => 'Découvrez les bases de PHP pour créer des pages web dynamiques.',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-14',
        'categorie_libelle' => 'Développement',
        'categorie_couleur' => 'bleu'
    ],

    [
        'id' => 2,
        'titre' => 'Découvrir le design UI/UX',
        'contenu' => 'Apprenez à créer des interfaces simples et agréables à utiliser.',
        'image' => 'article-example.png',
        'date_creation' => '2026-02-10',
        'categorie_libelle' => 'Design',
        'categorie_couleur' => 'rose'
    ]
];

require 'index-template.php';

?>
