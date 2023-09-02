@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN FRANÇAIS',
        'subtitles'=>['Savoirs de base'],
        'prerequis'=>'Salarié ayant une bonne maitrise en lecture, en écriture et en mathématiques souhaitant acquérir des savoirs de base',
        'public'=>'Ce cours est destiné aux personnes débutantes en français en situation d\'illettrisme ou ayant obtenu le niveau LE2',
        'imgpath'=>'/images/french.png',
        'docpath'=>'/docs/session1.pdf'
    ])
    @include('formation.layout.common-elements.duration',
    [
        'totalhours'=>'70',
        'weeklyhours'=>'3',
        'totalweeks'=>'24'
    ])
    @include('formation.layout.common-elements.objectifs',
    [
        'objectifs'=>[
            'Développer et renforcer leurs capacités de compréhension des écrits professionels',
            'Utiliser des formulaires et des documents professionels',
            'S\'approprier les outils de mesure et de gestion du temps',
            'S\'initier à l\'ordinateur et à l\'environnement Windows'
        ]
    ])
    @include('formation.layout.common-elements.price')
    @include('formation.layout.common-elements.contact')
    @include('formation.layout.common-elements.program',[
        'prog'=>
        [
            [
                'title'=>'Maîtrise des bases de la lecture',
                'progItemElements'=>
                [
                    'S\'approprier les processus elementaires de lecture',
                    'Maîtriser les sons pertinents de la langue fraçaise',
                    'Reconnaitre la structure de la phrase',
                    'Lire et comprendre des écrits simple'
                ]
            ],
            [
                'title'=>'Compréhension des écrits usuels et professionels',
                'progItemElements'=>[
                    'Développer et renforcer ses capacités de comprehension des écrits professionels.',
                    'Identifier les éléments essentiels d\'un écrit: qui,quoi,quand,où,comment ...',
                    'Connaître et s\'approprier le vocabulaire professionel.',
                    'Comprendre les consignes , les notices et les notes de service.',
                    'Analyser les information essentielles d\'un écrit professionel'
                ]
            ],
            [
                'title'=>'Production écrite (16heures)',
                'progItemElements'=>[
                    'Appliquer les règles de syntaxe liées à la structure et la forme de la phrase et à la ponctuation',
                    'Appliquer les règles d\'orthographes liées aux articles défini, indéfinis et partitifs et à l\'accord en genre et en nombre',
                    'Appliquer les règles de conjugaison du présent de l\'indicatif',
                    'Ecrire des phrases courtes et argumentées',
                    'Rédiger des documents professionels efficaces.'
                ]
            ]
        ]
    ])


    @include('formation.layout.common-elements.animation',
    [
        'anItems'=>[
            'Travail en binôme , méthode participative et mise en commun',
            'Travail individuel, méthode démonstrative et mise en commun',
            'Discrimination visuelle et auditive à partir d\'semples phonétiques et homonymes',
            'Carte heuristique'
        ]
    ])
    @include('formation.layout.common-elements.study-method')

    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'Differents types d\'écrits professionels',
            'QCM : définir un mot avec un choix de plusieurs orthographes, choisir le mot de liaison appromrié pour lir deux propositions',
            'Feed-back',
            'Remise des grilles de compétences tout au long du parcours et des attestations en fin de formation'
        ]
    ])

@endsection





