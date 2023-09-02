@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN INFORMATIQUE',
        'subtitles'=>['Initiation au logiciel word'],
        'prerequis'=>'Pas de prérequis exigés',
        'public'=>'Adultes salariés nécessitant une aisance en Word.',
        'imgpath'=>'/images/word.png',
        'docpath'=>'/docs/word.pdf'
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
            'Maitriser l\'ensemble des fonctionnalités de Word.'
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
                'title'=>'Découverte de Word ',
                'progItemElements'=>
                [
                    'Se repérer dans l\'écran : ruban, barre d\'accés rapide, barre d\'état.',
                    'Saisir, enregistrer, présenter un document',
                    'Prévisualiser et imprimer'
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
                'title'=>'Modifier un texte',
                'progItemElements'=>[
                    'Modifier ponctuellement un document.',
                    'Afficher, masquer les marques de mise en forme.',
                    'Supprimer, déplacer, recopier du texte.',
                    'Corriger un texte : vérifier l\'orthographe, chercher des synonymes.',
                    'Convertir un document en PDF.'

                ]
            ],
            [
                'title'=>'Insérer des illustrations',
                'progItemElements'=>[
                    'Insérer une image, un texte décoratif Word Art.',
                    'Illustrer un processus, un cycle avec un diagramme SmartArt.'
                ]
            ],
            [
                'title'=>'Insérer un tableau',
                'progItemElements'=>[
                    'Créer et positionner un tableau.',
                    'Ajouter, supprimer des lignes ou des colonnes.',
                    'Appliquer un style de tableau.',
                    'Modifier les bordures, les trames.'
                ]
            ]
        ]
    ])

    @include('formation.layout.common-elements.study-method',
    [
        'labels'=>[
            'Méthode participative et démonstrative.',
            'Des activités en vue de mettre en application les apprentissages'
        ]
    ])

    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'Evaluation formative des compétences au cours de la formation 2 l\'aide des exercices.',
            'Remise des grilles de compétences tout au long du parcours et des attestations en fin de formation.'
        ]
    ])

@endsection

