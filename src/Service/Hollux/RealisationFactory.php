<?php

namespace App\Service\Hollux;


class RealisationFactory
{
    const realisations = ['externes' => self::externes, 'internes' => self::internes];

    const externes = [
        'solveigdc' => [
            'img' => 'solveigdcfr.jpg' ,
            'imgAlt' => 'solveigdc',
            'title' => 'Solveig DeCuyper : le site',
            'content' => '',
            'url' => '#'
        ],
        'waral' => [
            'img' => 'chroniquesfr.jpg' ,
            'imgAlt' => 'waral',
            'title' => 'Chroniques de waral',
            'content' => '',
            'url' => '#'
        ],
        'haricot' => [
            'img' => 'haricotfr.jpg' ,
            'imgAlt' => 'haricot',
            'title' => 'Haricots de castelnaudari',
            'content' => '',
            'url' => '#'
        ],
        'ludo' => [
            'img' => 'ludoWp.jpg' ,
            'imgAlt' => 'ludo HW',
            'title' => 'Ludothèque la caverne d\'ali baba',
            'content' => '',
            'url' => '#'
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