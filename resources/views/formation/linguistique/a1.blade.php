@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN FRANÇAIS',
        'subtitles'=>['Français Langue Étrangère, Oral et écrit , niveau A1'],
        'prerequis'=>'',
        'public'=>'Favoriser l\'intégration sociale et professionnelle des personnes souhaitant s\'installer durablement ou définitivement en France par l\'apprentissage de la langue et de la culture française.',
        'imgpath'=>'/images/fle2.png',
        'docpath'=>'/docs/a1.pdf'
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
            'Effectuer leurs démarches administratives de manière autonome dans les espaces sociaux.',
            'Impliquer les participants dans leurs environnements social, économique et culturel en leur apportant des savoirs, des connaissances de bases sur le fonctionnement de la société du pays d\'accueil.',
            'Apporter une connaissance sur les principes, les valeurs républicaines et citoyennes du pays d\'accueil.',
            'Outiller les parents pour leur permettre de s\'impliquer dans la scolarité de leurs enfants.',
            'Construire un socle solide de comptéences socio-langagières afin de faciliter l\'intégration socio professionnelle.'
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
                'title'=>'Réception orale (40 heures)',
                'progItemElements'=>
                [
                    'Comprendre une announce publique',
                    'Comprendre une indication simple',
                    'Comprendre une instruction simple',
                    'Comrpendre une information chiffrée, comprendre l\'heure.'
                ]
            ],
            [
                'title'=>'Production orale, activités d\'expression (40 heures)',
                'progItemElements'=>[
                    'Se présenter et présenter sa famille',
                    'Demander et donner un prix',
                    'Présenter des personnes ou décrire des lieux',
                    'Exrimer un besoin ou demander un rendez-vous et un renseignement',
                    'Exprimer un problème de santé'
                ]
            ],
            [
                'title'=>'Production écrite (16 heures)',
                'progItemElements'=>[
                    'Noter un numéro, un chiffre, une date.',
                    'Recopier une adresse, un numéro de téléphone.',
                    'Compléter un formulaire.',
                    'Laisser un message simple a quelqu\'un.'
                ]
            ],
            [
                'title'=>'Production orale (16 heures)',
                'progItemElements'=>[
                    'Identifier la signalétique.',
                    'Comprendre des instructions simples.',
                    'Comprendre des informations de base.',
                    'Comprendre des informations chiffrées.',
                    'Reconnaître la nature et la fonction d\'écrits simples.'
                ]
            ]
        ]
    ])

    @include('formation.layout.common-elements.study-method',
    [
        'labels'=>['A la fois théoriques et participatives, les méthodes pédagogiques sont appréhendées au travers la mise en situation et de l\'utilisation de différents outils pédagogiques']
    ])

    @include('formation.layout.common-elements.animation',
    [
        'anItems'=>[
            'Méthode actionnelle pour travailler les 5 compétences (production écrite et orale en continu/ interaction et compréhension écrite et orale)',
            'Pédagogie différenciée pour la conduite des apprenants sur la voie de l\'autonomie.',
            'Discrimination visuelle et auditive à partir d\'exemples',
            'Des activités en sous-groupes permettant d\'enrichir l\'échange et de mettre en application les apprentissages.',
            'Prise en compte des expériences individuelles des participants.',
            'Carte heuristique.',
            'Brainstorming'
        ]
    ])

    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'Validation du niveau élémentaire A1 de connaissances et de maîtrise du français selon le cadre européen commun de référence pour les langues du conseil de l\'Europe'
        ]
    ])

@endsection
