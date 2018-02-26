<?php

namespace App\Service\Hollux;


class RealisationFactory
{
    const realisations = ['externes' => self::externes, 'internes' => self::internes];

    const externes = [
        'solveigdc' => [
            'img' => 'solveigdcfr.jpg' ,
            'imgAlt' => 'Hollux - site Solveig De Cuyper',
            'title' => 'Solveig De Cuyper',
            'content' => '',
            'url' => 'https://www.solveigdc.fr/'
        ],
        'waral' => [
            'img' => 'chroniquesfr.jpg' ,
            'imgAlt' => 'Hollux - site Chroniques de Waral',
            'title' => 'Chroniques de Waral',
            'content' => '',
            'url' => 'https://www.chroniquesdewaral.fr/'
        ],
        'haricot' => [
            'img' => 'haricotfr.jpg' ,
            'imgAlt' => 'Hollux - site du Haricot de Castelnaudary',
            'title' => 'Haricot de Castelnaudary',
            'content' => '',
            'url' => 'http://haricotdecastelnaudary.fr/'
        ],
        'ludo' => [
            'img' => 'ludoWp.jpg' ,
            'imgAlt' => 'Hollux - site de la Ludothèque d\'Horbourg-Wihr',
            'title' => 'Ludothèque la caverne d\'Ali Baba',
            'content' => '',
            'url' => 'https://www.ludotheque-horbourg-wihr.net/'
        ]
    ];

    const internes = [
        'smashup' => [
            'img' => '' ,
            'imgAlt' => '',
            'title' => 'Random Smash up',
            'content' => '',
            'url' => '#'
        ],
        'minijeu' => [
            'img' => '' ,
            'imgAlt' => '',
            'title' => 'Mini jeu cinéma',
            'content' => '',
            'url' => '#'
        ],
        'listbuilder' => [
            'img' => '' ,
            'imgAlt' => '',
            'title' => 'Conception List builder',
            'content' => '',
            'url' => '#'
        ],
        'ecom' => [
            'img' => '' ,
            'imgAlt' => '',
            'title' => 'Test ecommerce',
            'content' => '',
            'url' => '#'
        ],
        'pdf' => [
            'img' => '' ,
            'imgAlt' => '',
            'title' => 'Module PDF',
            'content' => '',
            'url' => '#'
        ]
    ];

    public function getRealisations()
    {
        $realisations = self::realisations;

        return $realisations;
    }

}