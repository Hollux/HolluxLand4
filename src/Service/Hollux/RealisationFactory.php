<?php

namespace App\Service\Hollux;


class RealisationFactory
{
    const realisations = ['externes' => self::externes, 'internes' => self::internes];

    const externes = [
        'solveigdc' => [
            'img' => 'img/fill/360/184/solveigdcfr.jpg' ,
            'imgAlt' => 'Hollux - site Solveig De Cuyper',
            'title' => 'Solveig De Cuyper',
            'content' => '',
            'url' => 'https://www.solveigdc.fr/'
        ],
        'waral' => [
            'img' => 'img/fill/360/184/chroniquesfr.jpg' ,
            'imgAlt' => 'Hollux - site Chroniques de Waral',
            'title' => 'Chroniques de Waral',
            'content' => '',
            'url' => 'https://www.chroniquesdewaral.fr/'
        ],
        'haricot' => [
            'img' => 'img/fill/360/184/haricotfr.jpg' ,
            'imgAlt' => 'Hollux - site du Haricot de Castelnaudary',
            'title' => 'Haricot de Castelnaudary',
            'content' => '',
            'url' => 'http://haricotdecastelnaudary.fr/'
        ],
        'ludo' => [
            'img' => 'img/fill/360/184/ludoWp.jpg' ,
            'imgAlt' => 'Hollux - site de la Ludothèque d\'Horbourg-Wihr',
            'title' => 'Ludothèque la caverne d\'Ali Baba',
            'content' => '',
            'url' => 'https://www.ludotheque-horbourg-wihr.net/'
        ]
    ];

    const internes = [
        'smashup' => [
            'img' => 'img/fill/360/184/smashUp.png' ,
            'imgAlt' => 'smashup',
            'title' => 'Random Smash up',
            'content' => '',
            'url' => 'https://holluxtest.pw/smashUp'
        ],
        'minijeu' => [
            'img' => '' ,
            'imgAlt' => '',
            'title' => 'Mini jeu cinéma',
            'content' => '',
            'url' => '#'
        ],
        'listbuilder' => [
            'img' => 'img/fill/360/184/listBuilder.png' ,
            'imgAlt' => '',
            'title' => 'Conception List builder',
            'content' => '',
            'url' => 'https://holluxtest.pw/listbuilde/'
        ],
        'ecom' => [
            'img' => 'img/fill/360/184/testEcom.png' ,
            'imgAlt' => '',
            'title' => 'Test ecommerce',
            'content' => '',
            'url' => 'https://holluxtest.pw/ecomindex'
        ],
        'pdf' => [
            'img' => 'img/fill/360/184/pdfEx.png' ,
            'imgAlt' => '',
            'title' => 'Module PDF',
            'content' => '',
            'url' => 'https://holluxtest.pw/viewpdf/solveig-de-cuyper_cv_da-junior'
        ],
        'tutos' => [
            'img' => 'img/fill/360/184/tutos.png' ,
            'imgAlt' => '',
            'title' => 'Tutos Fun',
            'content' => '',
            'url' => 'https://holluxtest.pw/tutos/'
        ]
    ];

    public function getRealisations()
    {
        $realisations = self::realisations;

        return $realisations;
    }

}