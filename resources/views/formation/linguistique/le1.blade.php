@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN FRANÇAIS',
        'subtitles'=>['Français Langue Étrangére, Alphabétisation, Lecture-Ecriture niveau 1'],
        'public'=>'Favoriser l\'intégration sociale et professionnelle des personnes en situation d’analphabétisation par l\'apprentissage des bases du français a l\'oral et 3 l\'écrit. Ce cours est destiné aux personnes qui ne parlent ou n\'écrivent pas le français ou ayant de graves problémes d\'illettrisme. Il conviendra gue ce type de formation exige un volume horaire important pour la maitrise des fondamentaux du français, d\'où l\'utilité d\'un deuxiéme niveau (LE2). ',
        'imgpath'=>'/images/fle1.png',
        'docpath'=>'/docs/le1.pdf'
    ])
    @include('formation.layout.common-elements.duration',
    [
        ///TODO Personnaliser
        'totalhours'=>'136',
        'weeklyhours'=>'6',
        'totalweeks'=>'12'
    ])
    @include('formation.layout.common-elements.objectifs',
    [
        'objectifs'=>[
            'Se présenter et présenter leur famille.',
            'Reconnaitre les lettres de l\'alphabet',
            'Ecrire leur nom et leur prénom.',
            'Discriminer les sons des voyelles et des consonnes.',
            'Connaitre le vocabulaire de base nécessaire a la vie quotidienne.',
            'Ecrire des phrases simples.',
            'Gagner en autonomie.'
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
                'title'=>' Acquisition de la lecture :',
                'progItemElements'=>
                [
                    'Connaitre l\'alphabet et l\'ordre alphabétique.',
                    'Comprendre la lecture combinatoire.',
                    'Comprendre les substitutions, additions et insertions de sons.',
                    'Comprendre une information chiffrée, comprendre l\'heure.',
                    'Savoir donner et réceptionner des informations orales.',
                    'Comprendre une instruction simple.'
                ]
            ],
            [
                'title'=>'Production orale, activités d\'expression (40 heures)',
                'progItemElements'=>
                [
                    'Se présenter et présenter sa famille.',
                    'Demander et donner un prix.',
                    'Présenter des personnes ou décrire des lieux.',
                    'Exprimer un besoin ou demander un rendez-vous et un renseignement.',
                    'Exprimer un probléme de santé.'
                ]
            ],
            [
                'title'=>'Production écrite (16 heures)',
                'progItemElements'=>
                [
                    'Connaitre l\'écriture manuscrite des lettres en minuscule et majuscule',
                    'Noter un numéro, un chiffre, une date.',
                    'Recopier une adresse, un numéro de téléphone.',
                    'Compléter un formulaire simple.',
                    'Laisser un message simple a quelqu’un.'

                ]
            ],
            [
                'title'=>'Réception écrite (16 heures)',
                'progItemElements'=>
                [
                    'dentifier la signalétique.',
                    'Comprendre des instructions simples.',
                    'Comprendre des informations de base.',
                    'Comprendre des informations chiffrées.',
                    'Reconnaitre la nature et la fonction d\'écrits simples.'
                ]
            ],
        ]
    ])

    @include('formation.layout.common-elements.study-method',
    [
        'labels'=>[
            'A la fois théoriques et participatives, les méthodes pédagogiques sont appréhendées au travers de mises en situation et de l\'utilisation de différents outils pédagogiques.',
            'La salle de formation est équipée des vidéoprojecteur, imprimante multifonction, tableau bland et connexion internet. Accés aux supports de cours.'
        ]
    ])
    @include('formation.layout.common-elements.animation',[
        'anItems'=>[
            'Méthode actionnelle pour travailler les 5 compétences (production écrite et orale en continu /interaction et compréhension écrite et orale).',
            'Pédagogie différenciée pour la conduite des apprenants sur la voie de l\'autonomie.',
            'Discrimination visuelle et auditive a partir d\'exemples.',
            'Des activités en sous-groupes permettant d\'enrichir l\'échange et de mettre en application les apprentissages.',
            'Prise en compte des expériences individuelles des participants.',
            'Carte heuristigue.',
            'Brainstorming.'
        ]
    ])
    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'Validation du niveau élémentaire LE1 de connaissances et de maitrise du français selon le cadre européen commun de référence pour les langues du conseil de l\'europe',
            'Remise des grilles de compétences tout au long du parcours et de l\'attestation en fin de formation'
        ]
    ])

@endsection


