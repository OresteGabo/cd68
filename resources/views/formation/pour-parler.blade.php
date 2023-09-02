@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [

        'title'=>'FORMATION EN FRAÇAIS',
        'subtitles'=>['Développement de l\'oralité: atelier PourParler'],
        'public'=>'Ce cours est destiné aux adultes allophones ou en situation souhaitant développer leurs compétences langagières, travailler la prononciation pour favoriser leur intégration sociale.',
        'imgpath'=>'/images/french.png',
        'docpath'=>'/docs/pourparler.pdf'
    ])
    @include('formation.layout.common-elements.duration',
    [
        'totalhours'=>'72',
        'weeklyhours'=>'3',
        'totalweeks'=>'24'
    ])

    @include('formation.layout.common-elements.list',
    [
        'title'=>'Objectifs généraux',
        'subtitle'=>'A l\'issue de la formation, les participants auront',
        'listItems'=>[
            'Developpé et acquis les actes languagiers par le bias du théâtre ou toutes autres activités basées sur la pédagogie actionnelle (virelangues, jeux de rôle,...), leur permettant de favoriser leur intégration sociale',
            'Développer leur implication dans l\'environnement social, économique et culturel par l\'acquisition de savoirs et connaissances de base.',
            'Gagné en autonomie dans leur apprentissage et dans les actions du quotidien.'
        ]
    ])
    @include('formation.layout.common-elements.list',
    [
        'title'=>'Objectifs communicatifs et langagiers',
        'subtitle'=>'',
        'listItems'=>[
            'Améliorer l\'expression orale, la mise en voix et la gesture',
            'Acquérir et enrichir son lexique et sa culture personnelle.',
            'Enchaîner plusieurs phrases pour produire un court discours',
            'Consolider et compéter les acquis en epression orale',
            'Participer à un échange , construire et faire évoluer sa pensée lors de situations improvisées et spontanées.',
            'Prendre confiance en soi, gérer son stress et sin trac.'
        ]
    ])

    @include('formation.layout.common-elements.price')
    @include('formation.layout.common-elements.contact')
    @include('formation.layout.common-elements.program',[
        'prog'=>
        [
            [
                'title'=>'S\'approprier les composants de l\'expression orale',
                'progItemElements'=>
                [
                    'Savoir prononcer , répéter et mimer',
                    'Soigner son timbre, le volume de sa voix, le débit rhythme, les articulations les intonations et les silences',
                    'Savoir gérer son trac et sa respiration, canaliser ses émotions',
                    'savoir regarder, sourire et adopter les bons gestes et les bonnes postures',
                    'Savoir garder son attention et écouter son interlocuteur',
                    'Savoir se déplacer et occuper son espace'
                ]
            ],
            [
                'title'=>'Faciliter la parole',
                'progItemElements'=>
                [
                    'Savoir recourir au vocabulaire de tous les jours',
                    'Maîtriser le vocabulaire spécifique aux professions des stagiaires pour assurer les échanges efficaces avec leurs collègues, leur hiérarchie',
                    'Connaître les bases syntaxiques pour developper ses compétences orales',
                    'Connaître les tournures de phrases',
                    'Savoir faire des phrases courtes et simple',
                    'Maîtriser les formules de politesse et savoir les adapter aux situations',
                    'Connaître les expressions idiomatique',
                    'Savoir lire à haute voix',
                    'Savoir d\'exprimer avec fluidité et spontanéité',
                    'Savoir échanger autour de sujets adaptés aux besoins des apprenants'
                ]
            ],
            [
                'title'=>'Se préparer à un entretien',
                'progItemElements'=>
                [
                    'Se présenter , parler de soi',
                    'Présenter sa famille',
                    'Parler de son parcours scolaire et professionnel',
                    'Présenter ses compétences professionnelles',
                    'Présenter ses centres d\'intérêt',
                    'Exprimer ses sentiments, ses qualités et ses goûts'
                ]
            ],
            [
                'title'=>'Se déplacer dans sa ville',
                'progItemElements'=>
                [
                    'Connaître les moyens de transport (bus, tram et train)',
                    'Savoir demander son chemin , savoir lire un plan',
                    'Connaître les moyens de payement',
                    'Réserver et acheter un billet de train, d\'avion',
                    'Savoir décrire des lieux'
                ]
            ],
            [
                'title'=>'Se repérer dans le temps',
                'progItemElements'=>
                [
                    'Connaître les jours de la semaine, les mois, et les saisons',
                    'Connaître les vacances scolaires, les jours fériés',
                    'Parler de son emploi du temps , utiliser un agenda',
                    'Lire et établir un planning',
                    'Comprendre et lire l\'heure'
                ]
            ],
            [
                'title'=>'Chercher une information',
                'progItemElements'=>
                [
                    'Repérer un lieux,suivre un itinéraire sur un plan',
                    'Connaître les logos (CAF, CPAM, Pole Emploi, Mairie, Préfecture)',
                    'Répérer les prix , les horaires',
                    'Réserver une chambre d\'hôtes',
                    'Savoir commander au restaurant'
                ]
            ],
            [
                'title'=>'Prendre soin de sa santé',
                'progItemElements'=>
                [
                    'Connaitre son corps, exprimer sa douleur',
                    'Prendre RDV chez son docteur',
                    'Comprendre une ordonnance médicale',
                    'Chercher une information à l\'hôpital, au laboratoire d\'analyse'
                ]
            ],
            [
                'title'=>'Démarches administratives',
                'progItemElements'=>
                [
                    'Savoir s\'inscrire à Pôle emploi',
                    'Savoir demander une attestation de droits CAF',
                    'Savoir faire une demande de logement',
                    'Savoir demander un dopssier à la sous-préfecture',
                    'Savoir s\'inscrire à la bibliothèque',
                    'Savoir inscrire un enfant à l\'école, à une activité',
                    'Comprendre un document administratif'
                ]
            ]
        ]
    ])
    @include('formation.layout.common-elements.study-method',[
        'labels'=>
        [
            'A la fois théoriques et participatives, les méthodes pédagogiques sont appréhendées au travers la mise en situation et de l\'utilisation de differents outils pédagogiques et de documents administratifs et professionels authentiques. La perspective actionnelle prend alors tout son sens.',
            'La salle de formation est équipée des vidéoprojecteur,imprimante multifonction, tableau blanc et connexion internet. Accès au support de cours est disponible en ligne',
            'Intervenant théâtre'
        ]
    ])
    @include('formation.layout.common-elements.animation',
    [
        'anItems'=>[
            'Méthode actionnelle pour travailler diverses compétences (Production orale, interaction et compréhension écrite et orale)',
            'Alternance entre méthode participative et méthode démonstrative pour jouer la saynète.',
            'Saynètes en sous-groupes permettant d\'enrichir l\'échange et de mettre en application les apprentissages.',
            'Activités de lecture,d\'écriture , de mémorisation et de répétition afin de mettre en application les apprentissages.',
            'Textes, images , enregistrement vocal (site de la radio RFI), vidéo',
            'Méthode miroir',
            'Prise en compte de l\expérience professionnelle de l\'apprenant'
        ]
    ])

    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'Exercices d\'application.',
            'Exercices sur les differents types de documents professionels spécifiques à la fonction de l\'apprenant dans l\'entreprise.',
            'Feed-back',
            'Remise des grilles de compétences tout au long du parcours et des attestations en fin de formation'
        ]
    ])
@endsection

