<?php

$articles = [
    [
        'id' => 1,
        'titre' => 'Introduction au développement Web',
        'contenu' => 'Découvrez les bases du développement web avec HTML, CSS et PHP.',
        'categorie_libelle' => 'Développement',
        'categorie_couleur' => 'bleu',
        'date_creation' => '2026-11-01'
    ],
    [
        'id' => 2,
        'titre' => 'Les bases du Design UI/UX',
        'contenu' => 'Apprenez les principes fondamentaux du design des interfaces.',
        'categorie_libelle' => 'Design UI/UX',
        'categorie_couleur' => 'rose',
        'date_creation' => '2026-11-02'
    ]
];

require 'index-template.php';

?>