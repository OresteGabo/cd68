@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN FRANÇAIS',
        'subtitles'=>['Français Langue Étrangère, Oral et écrit , niveau A2'],
        'prerequis'=>'Ce cours est déstiné aux personnes débutantes en français ayant suivi une formation en ayant obtenu le niveau A1',
        'public'=>'Favoriser l\'intégration sociale et professionnelle des personnes souhaitant s\'installer durablement ou définitivement en France par l\'apprentissage de la langue et de la culture française.',
        'imgpath'=>'/images/fle2.png',
        'docpath'=>'/docs/a2.pdf'
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
            'Construire une socle solide de compétences socio-languagières afin de faciliter l\'integration socio-professionnelle',
            'S\'exprimer oralement de manière simple afin de raconter des expériences, des projets.',
            'Ecrire des textes répondant aux besoins du quotidien (mails, courriers)',
            'Comprendre les codes de travail et les savoir-être en entreprise'
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
                    'Comprendre une indication , une consigne et une instruction simple.',
                    'Comprendre l\'essentiel d\'une conversation simple ou d\'un message audio.',
                    'Comprendre plusieurs directives données à l\'orale.',
                    'Identifier correctement le ton du locuteur'
                ]
            ],
            [
                'title'=>'Production orale, activités d\'expression (40 heures)',
                'progItemElements'=>[
                    'Parler de soi, de son véçu, de son expérience.',
                    'Exprimer un problème de santé physique et psychologique.',
                    'Raconter un événement',
                    'présenter son point de vue.',
                    'Exprimer un besoin et faire une réclamation'
                ]
            ],
            [
                'title'=>'Production écrite (16 heures)',
                'progItemElements'=>[
                    'Compléter un formulaire.',
                    'Rendre compte d\'un problème , effectuer une réclamation.',
                    'Envoyer un mail professionel en utilisant des formules d\'usage adéquates.'
                ]
            ],
            [
                'title'=>'Production orale (16 heures)',
                'progItemElements'=>[
                    'Comprendre des textes informatifs ou descriptifs spécialises somples',
                    'Comprendre des écrits professionels.',
                    'Comprendre des instructions, des informations simples.',
                    'Comprendre des informations chiffrées.',
                    'Reconnaître la nature et la fonction d\'écrits simples'
                ]
            ]
        ]
    ])

    @include('formation.layout.common-elements.study-method',
    [
        'labels'=>['A la fois théoriques et participatives, les méthodes pédagogiques sont appréhendées au travers la mise en situation et de l\'utilisation de différents outils pédagogiques',
        'La salle de firmation est équipée des vidéoprjecteurs, imprimante multifonction, tableau blanc et connexion internet.',
        'Accès aux supports de cours']
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
            'Validation du niveau élémentaire A1 de connaissances et de maîtrise du français selon le cadre européen commun de référence pour les langues du conseil de l\'Europe',
            'Remise des grilles de compétences tout au long du parcours et de l\'attestation en fin de formation'
        ]
    ])

@endsection

