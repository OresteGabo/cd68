@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    {{--@include('formation.layout.common-elements.intro',
    [

        'title'=>'FORMATION EN FRANÇAIS',
        'subtitles'=>['Développement des compétences clés en situation de formation','CAP Cuisine'],
        'public'=>'Ce cours est destiné à de jeunes mineurs en formation « CAP Cuisine » pris en charge par l’assistance sociale.',
        'imgpath'=>'/images/mesure.png',
        'docpath'=>'/docs/mesure.pdf'
    ])--}}
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN FRANÇAIS',
        'subtitles'=>['Développement des compétences clés en situation de formation','CAP Cuisine'],
        'public'=>'Ce cours est destiné à de jeunes mineurs en formation « CAP Cuisine » pris en charge par l’assistance sociale.',
        'imgpath'=>'/images/mesure.png',
        'docpath'=>'/docs/mesure.pdf'
    ])
    @include('formation.layout.common-elements.duration',
    [
        'totalhours'=>'80',
        'weeklyhours'=>'3h/séance, 2fois la semaine',
        'totalweeks'=>'14'
    ])

    @include('formation.layout.common-elements.list',
    [
        'title'=>'Objectifs généraux',
        'subtitle'=>'A l\'issue de la formation, les participants auront',
        'listItems'=>[
            'Développé leur autonomie en communication écrite et orale pour une meilleure aisance dans leur formation.',
            'Amélioré leurs savoirs de base par le biais de mises en situations (perspective actionnelle).'
        ]
    ])
    @include('formation.layout.common-elements.list',
    [
        'title'=>'Objectifs communicatifs et langagiers',
        'subtitle'=>'',
        'listItems'=>[
            'Connaitre le lexique des ingrédients et des modes de préparation.',
            'Connaitre le lexique des ustensiles, du matériel et de l’équipement.',
            'Connaitre le lexique des locaux affectés à la cuisine et au service.',
            'Comprendre les consignes et les commandes orales.',
            'Comprendre les documents écrits de travail (plannings de travail, bons delivraison, fiches techniques, normes de sécurité et d’hygiène, etc.)'
        ]
    ])

    @include('formation.layout.common-elements.price')
    @include('formation.layout.common-elements.contact')
    @include('formation.layout.common-elements.program',[
        'prog'=>
        [
            [
                'title'=>'Acquisition des savoirs de base linguistiques:',
                'progItemElements'=>
                [
                    'Lexique des aliments, de la cuisine, des ustensiles et des produits d’hygiène.',
                    'Connaissance des différents métiers de la restauration.'
                ]
            ],
            [
                'title'=>'Acquisition des savoirs de base mathématiques',
                'progItemElements'=>
                [
                    'Maitrise des opérations mathématiques élémentaires (calculs, conversions, quantités, grandeur…).'
                ]
            ],
            [
                'title'=>'Acquisition des compétences communicatives:',
                'progItemElements'=>
                [
                    'Compréhension des consignes données permettant d’exécuter les différentes tâches.',
                    'Maitrise de l’impératif, du présent, du passé composé et du futur proche.',
                    'Maitrise de l’expression de l’obligation, de l’interdiction et du conseil.'
                ]
            ],
        ]
    ])
    @include('formation.layout.common-elements.study-method',[
        'labels'=>
        [
            'A la fois théoriques et participatives, les méthodes pédagogiques sont appréhendées au travers de mises en situation et de l\'utilisation d’ outils pédagogiques très variés : documents sonores et vidéos, documents authentiques (recettes, consignes d’hygiène, bons de commande, menus, étiquettes de produits…). La salle de formation est équipée des vidéoprojecteur, imprimante multifonction, tableau blanc et connexion internet. L’accès aux supports de cours est disponible en ligne.'
        ]
    ])
    @include('formation.layout.common-elements.animation',
    [
        'anItems'=>[
            'Pédagogie différenciée pour la conduite des apprenants sur la voie de l’autonomie.',
            'Des activités en sous-groupes permettant d’enrichir l’échange et de mettre en application les apprentissages.',
            'Carte heuristique.',
            'Brainstorming.'
        ]
    ])

    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'A l’issue de l’évaluation finale, les progrès de chaque participant sont mesurés par rapport au positionnement initial.',
            'Remise des grilles de compétences tout au long du parcours et de l’attestation en fin de formation.'
]
    ])
@endsection

