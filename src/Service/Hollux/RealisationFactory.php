<?php

namespace App\Service\Hollux;


class RealisationFactory
{
    const realisations = ['externes' => self::externes, 'internes' => self::internes];

    const externes = [
        'solveigdc' => [
            'img' => 'img/fill/360/184/solveigdcfr.jpg',
            'imgAlt' => 'Hollux - site Solveig De Cuyper',
            'title' => 'Solveig De Cuyper',
            'content' => 'Site vitrine pour Développeuse, réalisé en symfony3 avec mise en place de certains outils 
                déjà présent sur mon site. Plusieurs test avec l\'outil masonry mais non retenu car fait pour trop de contenu',
            'url' => 'https://www.solveigdc.fr/'
        ],
        'waral' => [
            'img' => 'img/fill/360/184/chroniquesfr.jpg',
            'imgAlt' => 'Hollux - site Chroniques de Waral',
            'title' => 'Chroniques de Waral',
            'content' => 'Commande en cour de réalisation, site vitrine administrable par le client dans un premier 
                temps réalisation en symfony3, par la suite site Ecommerce en attente de contenu de la part du client',
            'url' => 'https://www.chroniquesdewaral.fr/'
        ],
        'haricot' => [
            'img' => 'img/fill/360/184/haricotfr.jpg',
            'imgAlt' => 'Hollux - site du Haricot de Castelnaudary',
            'title' => 'Haricot de Castelnaudary',
            'content' => 'Site vitrine pour une entreprise de vente de haricot de Castelnaudary, réalisation from scratch en MVC',
            'url' => 'http://haricotdecastelnaudary.fr/'
        ],
        'ludo' => [
            'img' => 'img/fill/360/184/ludoWp.jpg',
            'imgAlt' => 'Hollux - site de la Ludothèque d\'Horbourg-Wihr',
            'title' => 'Ludothèque la caverne d\'Ali Baba',
            'content' => 'Réalisation bénévole d\'un petit site wordpress pour une ludothèque car leur site datait 
            un peu. Réalisation et demande simple voilà pourquoi j\'ai testé wordpress',
            'url' => 'https://www.ludotheque-horbourg-wihr.net/'
        ]
    ];

    const internes = [
        'smashup' => [
            'img' => 'img/fill/360/184/smashUp.png',
            'imgAlt' => 'smashup',
            'title' => 'Random Smash up',
            'content' => 'Petite création pour mon utilisation du jeu SmashUp afin de rajouter du fun entre amis.',
            'url' => 'https://holluxtest.pw/smashUp'
        ],
        /*'minijeu' => [
            'img' => '' ,
            'imgAlt' => '',
            'title' => 'Mini jeu cinéma',
            'content' => '',
            'url' => '#'
        ],*/
        'listbuilder' => [
            'img' => 'img/fill/360/184/listBuilder.png',
            'imgAlt' => '',
            'title' => 'Conception List builder',
            'content' => 'Demande d\'un outil de list builder pour un jeu de figurine, j\'ai donc fais ce test sur la base du jeu Wahrammer pour voir si cela m\'était possible',
            'url' => 'https://holluxtest.pw/listbuilde/'
        ],
        'ecom' => [
            'img' => 'img/fill/360/184/testEcom.png',
            'imgAlt' => '',
            'title' => 'Test ecommerce',
            'content' => 'Essai de Ecommerce Symfony en suivant deux trois tutos, souvent détruit et refais (donc état actuel pas top)',
            'url' => 'https://holluxtest.pw/ecomindex'
        ],
        'pdf' => [
            'img' => 'img/fill/360/184/pdfEx.png',
            'imgAlt' => '',
            'title' => 'Module PDF',
            'content' => 'Petit outil de pdf toujours utile sur un site web.',
            'url' => 'https://holluxtest.pw/viewpdf/solveig-de-cuyper_cv_da-junior'
        ],
        'tutos' => [
            'img' => 'img/fill/360/184/tutos.png',
            'imgAlt' => '',
            'title' => 'Tutos Fun',
            'content' => 'Réalisation fun de tutos code pour me perfectionné, très inspiré de la Désencyclopédie',
            'url' => 'https://holluxtest.pw/tutos/'
        ]
    ];

    public function getRealisations()
    {
        $realisations = self::realisations;

        return $realisations;
    }

}