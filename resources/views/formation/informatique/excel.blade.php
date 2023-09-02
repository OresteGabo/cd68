@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN INFORMATIQUE',
        'subtitles'=>['Initiation au logiciel Excel'],
        'prerequis'=>'',
        'public'=>'Ce cours est destiné aux personnes ayant une aisance dans l\'environnement. Windows et une connaissance des bases du traitement de texte.',
        'imgpath'=>'/images/excel.png',
        'docpath'=>'/docs/excel.pdf'
    ])
    @include('formation.layout.common-elements.duration',
    [
        ///TODO Infos to be modified
        'totalhours'=>'136',
        'weeklyhours'=>'3',
        'totalweeks'=>'34'
    ])
    @include('formation.layout.common-elements.objectifs',
    [
        'objectifs'=>[
            'Maîtriser l\'ensemble des fonctionnalités de Excel.'
        ]
    ])


    @include('formation.layout.common-elements.price',[
    ///TODO  Information to be personalised
    ])
    @include('formation.layout.common-elements.contact')


    @include('formation.layout.common-elements.program',[
        'prog'=>
        [
            [
                'title'=>'Découverte d’Excel :',
                'progItemElements'=>
                [
                    'Connaitre les possibilités du logiciel.',
                    'Découvrir l\'environnement graphique.',
                    'Se repérer, se déplacer dans la feuille de calcul.',
                    'Mettre en forme une feuille de calcul.',
                    'Sélectionner des cellules, des lignes, des colonnes.',
                    'Mettre en forme du texte, des nombres, des dates et les bordure.',
                    'Agrémenter un tableau avec des couleurs.',
                    'Modifier la taille des lignes et des colonnes'
                ]
            ],
            [
                'title'=>'Modifier la structure d\'un tableau :',
                'progItemElements'=>[
                    'Fusionner les cellules.',
                    'Trier, filtrer les données.',
                    'Insérer, supprimer des lignes ou des colonnes.',
                    'Couper, copier, coller un tableau ou ses éléments.'
                ]
            ],
            [
                'title'=>'Concevoir des tableaux avec des calculs simples.',
                'progItemElements'=>[
                    'Concevoir une formule a l\'aide des opérateurs arithmétiques.',
                    'Utiliser les fonctions courantes (some, moyenne, max, min, nb).',
                    'Trier, filtrer les données.',
                    'Illustrer un tableau à l\'aide d\'un graphique automatique.'

                ]
            ],
            [
                'title'=>'Insérer un graphique',
                'progItemElements'=>[
                    'Créer et positionner un tableau.',
                    'Créer un graphique a partir d\'un tableau simple.',
                    'Distinguer les différents types de graphiques.',
                    'Mettre en forme et adapter les éléments d\'un grphique.'
                ]
            ]
        ]
    ])

    @include('formation.layout.common-elements.study-method',
    [
        'labels'=>['A la fois théoriques et participatives, les méthodes pédagogiques sont appréhendées au travers la mise en situation et de l\'utilisation de différents outils pédagogiques']
    ])

    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'Evaluation formative des compétences au cours de la formation à l\'aide des exercices.',
            'Remise des grilles de compétences tout au long du parcours et des attestations en fin de formation.'
        ]
    ])

@endsection
