@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [

        'title'=>'FORMATION DE FORMATEURS',
        'subtitles'=>['Ingénierie de formation, évolution des pratiques, Objectifs et avenir des ASL'],
        'public'=>'Formateurs et stagiaires de la formation, acteurs sociaux et culturels, responsables associatifs, étudiants',
        'imgpath'=>'/images/french.png',
        'docpath'=>'/docs/formateurs.pdf'
    ])
    @include('formation.layout.common-elements.duration',
    [
        'totalhours'=>'72',
        'weeklyhours'=>'3',
        'totalweeks'=>'24'
    ])

    @include('formation.layout.common-elements.list',
    [
        'title'=>'Objectifs',
        'subtitle'=>'',
        'listItems'=>[
            'Aborder la formation et les techniques de formation et de conception de manière pratique afin d\'optimiser les pratiques professionelles en contexte.',
            'Construire des objectifs et progresions pédagogiques.',
            'Maîtriser les techniques d\'animation de groupe.',
            'Évaluer l\'action de formation'

        ]
    ])
    @include('formation.layout.common-elements.list',
    [
        'title'=>'Contenus et déroulement de la journée',
        'subtitle'=>'',
        'listItems'=>[
            'Échanges à propos des situations formatives rencontrées (tour de table).',
            'Identification des fiddérentes méthodes possibles : exposés, exercices en ateliers, mises en situation, analyse de pratiques...',
            'Identification des différentes fonctions du formateur et des attitudes / postures à adopter.',
            'Mise en pratique: présentation d\'un cas concret de demande de formation.',
            'Repas de midi (pause de 1h30)',
            'Analyse du contexte et des besoins de la formation présentées avant la pause méridienne.',
            'Définition collective des objectifs généraux et des sous-objectifs.',
            'Définition de l\'impact attendu.'
        ]
    ])
    @include('formation.layout.common-elements.list',
    [
        'title'=>'',
        'subtitle'=>'Travaux de groupe :',
        'listItems'=>[
            'Groupe 1: Conception et formalisation (d\'un retroplanning).',
            'Groupe 2: Conception d\'une fiche de présentation du projet.',
            'Groupe 3: Conception d\'outils pédagogiques.',
            'Groupe 4: Conception d\'un outil d\'évaluation de l\'action de formation.'
        ]
    ])

    @include('formation.layout.common-elements.list',
    [
        'title'=>'',
        'subtitle'=>'Le retour',
        'listItems'=>[
            'Présentation par les différents groupes des réflexions poursuivies.',
            'Pour chaque outil présenté en définir les atouts (forces, opportunités) et les handicaps (faiblesses, menaces).',
            'Évaluation minute de la formation.'
        ]
    ])

    <section>
        <div class="container">
            <h2 class="text-dark">Coût pédagogique</h2>
            <div class="course-info">
                <h4>1 journée de 7heures ou 2 demi-journées de 3h30.</h4>
                <p>Coût total: <span class="fw-bold">100 euros/ heure</span></p>
            </div>
        </div>
    </section>

    <section class=" mt-5 " style="background-color: #E8D9B5; font-family: Arial, sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="font-weight-bold text-dark">Renseignement inscription</h4>
                    <p>Mme Kobel</p>
                    <p>Mme Ahmane</p>
                    <p>Tel: 03 89 42 85 20</p>
                    <p>Fax: 03 89 42 85 20</p>
                    <p>Email: <a href="mailto:cdafal68.asl@hotmail.fr" class="">cdafal68.asl@hotmail.fr</a></p>
                    <p>Mme Kobel</p>
                </div>
                <div class="col-sm-4">
                    <p class="font-weight-bold">Intervenante:</p>
                    <p>Sophie Etienne</p>
                    <p>Docteur en sciences du langages</p>
                    <h4 class="font-weight-bold text-dark">Responsable</h4>
                    <p>Bénédicte Lang</p>
                    <p>Responsable de formation.</p>
                </div>
                <div class="col-sm-4">
                    <h4 class="font-weight-bold text-dark">Lieu</h4>
                    <p>CDAFAL68</p>
                    <p>3, rue Georges Risler,</p>
                    <p>68100 MULHOUSE</p>
                </div>
            </div>
        </div>
    </section>
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

