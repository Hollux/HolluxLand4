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
            'content' => 'Site vitrine pour Solveig De Cuyper, webdesigner à Lyon. Réalisé en Symfony3 avec mise en place de certains outils 
                déjà présent sur mon site. Plusieurs test avec l\'outil masonry, finalement non retenu.',
            'url' => 'https://www.solveigdc.fr/'
        ],
        'waral' => [
            'img' => 'img/fill/360/184/chroniquesfr.jpg',
            'imgAlt' => 'Hollux - site Chroniques de Waral',
            'title' => 'Chroniques de Waral',
            'content' => 'Site vitrine en cours de réalisation. Réalisation en Symfony3. Par la suite, il est prévu que ce site évolue en Ecommerce administrable. En attente de contenus de la part du client.',
            'url' => 'https://www.chroniquesdewaral.fr/'
        ],
        'haricot' => [
            'img' => 'img/fill/360/184/haricotfr.jpg',
            'imgAlt' => 'Hollux - site du Haricot de Castelnaudary',
            'title' => 'Haricot de Castelnaudary',
            'content' => 'Site vitrine pour Le haricot de Castelnaudary, label visant à promouvoir le haricot lingot du Languedoc. Réalisation from scratch en MVC.',
            'url' => 'http://haricotdecastelnaudary.fr/'
        ],
        'ludo' => [
            'img' => 'img/fill/360/184/ludoWp.jpg',
            'imgAlt' => 'Hollux - site de la Ludothèque d\'Horbourg-Wihr',
            'title' => 'Ludothèque la caverne d\'Ali Baba',
            'content' => 'Réalisation bénévole d\'un petit site Wordpress pour la ludothèque "La Caverne d\'Ali Baba" (création d\'un thème). Réalisation et demande simples, voilà pourquoi j\'ai testé Wordpress !',
            'url' => 'https://www.ludotheque-horbourg-wihr.net/'
        ]
    ];

    const internes = [
        'VueJS' => [
            'img' => 'img/fill/360/184/vueJS.png',
            'imgAlt' => 'vueJS',
            'title' => 'VueJS',
            'content' => "tests de VueJS, réalisation d'un mini jeu présent sur l'application",
            'url' => 'https://hollux.fr/#/jeux'
        ],
        'smashup' => [
            'img' => 'img/fill/360/184/smashUp.png',
            'imgAlt' => 'smashup',
            'title' => 'Random Smash up',
            'content' => 'Petite création pour mon utilisation du jeu SmashUp afin de rajouter du fun entre amis. Outil de choix de factions aléatoires.',
            'url' => 'https://old.hollux.pw/smashUp'
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
            'content' => 'Demande d\'un outil de list builder pour un jeu de figurine, j\'ai donc fait ce test sur la base du jeu Warhammer pour voir si cela m\'était possible',
            'url' => 'https://old.hollux.pw/listbuilde/'
        ],
        'ecom' => [
            'img' => 'img/fill/360/184/testEcom.png',
            'imgAlt' => '',
            'title' => 'Test ecommerce',
            'content' => 'Essai de Ecommerce Symfony en suivant quelques tutos. Souvent détruit et refait (d\'où l\'état actuel pas top)',
            'url' => 'https://old.hollux.pw/ecomindex'
        ],
        'pdf' => [
            'img' => 'img/fill/360/184/pdfEx.png',
            'imgAlt' => '',
            'title' => 'Module PDF',
            'content' => 'Petit outil de PDF toujours utile sur un site web.',
            'url' => 'https://old.hollux.pw/viewpdf/adrien_marchand_cv'
        ],
        'tutos' => [
            'img' => 'img/fill/360/184/tutos.png',
            'imgAlt' => '',
            'title' => 'Tutos Fun',
            'content' => 'Réalisation fun de tutos code pour me perfectionner. Très inspiré par la Désencyclopédie.',
            'url' => 'https://old.hollux.pw/tutos/'
        ]
    ];

    public function getRealisations()
    {
        $realisations = self::realisations;

        return $realisations;
    }

}