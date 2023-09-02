@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN FRANÇAIS',
        'subtitles'=>['Perfectionnement en langua française, Oral et écrit , niveau B1'],
        'prerequis'=>'Ce cours est destiné aux personnes ayant une bonne connaissance de la langue française ou maîtrisant le français au niveau B1',
        'public'=>'Adultes francophones dont la situation professionnelle nécessite une aisance à l\'écrit. ',
        'imgpath'=>'/images/fle1.png',
        'docpath'=>'/docs/le1.pdf'
    ])
    @include('formation.layout.common-elements.duration',
    [
        'totalhours'=>'70',
        'weeklyhours'=>'6',
        'totalweeks'=>'12'
    ])
    @include('formation.layout.common-elements.objectifs',
    [
        'objectifs'=>[
            'Comprendre le contenu essentiel du sujets concrets ou abstraits dans un texte complexe',
            'Saisir l\'implicite d\'un propos ou d\'un texte',
            'Communiquer avec aisance et spontanéité à l\'écrit comme à l\'oral, face à des locuteurs natifs.',
            'S\'exprimer de façon claire et détaillée sur une grande gamme de sujets',
            'Émmetre un avis sur un sujet d\'actualité, exposer les avantages et les inconvenients de différentes possibilités, proposer des solutions, argumenter et défendre un point de vue'

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
                'title'=>'Renforcement de la compréhension orale et écrite',
                'progItemElements'=>
                [
                    'Utilisationd\'articles de presse et de documents audiovisuels pour approfondir la connaissance de l\'actualité mais aussi de la culture française',
                    'Prise de notes à partir de documents authentiques radiophoniques u télévisuels'
                ]
            ],
            [
                'title'=>'Consolidation des connaissances grammaticales et linguistiques',
                'progItemElements'=>
                [
                    'Révision des temps du passé pour faire un récit détaillé et émettre des hypothèses syr le passé.',
                    'Révision et approfondissement du conditionnel présent pour exprimer des faits hypothétiques et du conditionnel passé pour exprimer un reproche ou un regret',
                    'Le discours indirect pour rapporter des propos et la concordance des temps indirect au passé',
                    'La double pronominalisation (place des COD et COI)',
                    'Les locutions et verbes prépositionnels',
                    'Le subjonctif (apres les verbes, les tournures impersonnelles et les locutions conjonctives) pour exprimer des sentiments, le doute, le souhait, obligation, la volonté, le jugement, l\'opposition, la concession...',
                    'Les pronoms compléments et pronoms relatifs composés.',
                    'L\'expression du but, de la condition, de "opposition, de la cause, de la conséquence et de la concession'
                ]
            ],
            [
                'title'=>'Approfondissement du discours oral et écrit :',
                'progItemElements'=>
                [
                    'Les phrases complexes',

                    'Les connecteurs logiques de "argumentation',
                    'Nominalisation et organisation du discours',
                    'Elaboration de syntheses de documents écrits',
                    'Prise de parole individuelle dans et devant le groupe : exposé, comptes-rendus, situation de débat',
                    'Travail de phonétique sur les liaisons facultatives et les groupes rythmiques pour un style plus fluide',
                    'Travail sur l\'intonation (expression des sentiments), les ellipses'
                ]
            ],
            [
                'title'=>'Enrichissement lexical des thématiques abordées:',
                'progItemElements'=>
                [
                    'Les objets personnels du quotidien',
                    'Les coutumes, les traditions culturelles',
                    'Le monde du travail, la vie professionnelle',
                    'La famille, les relations sociales',
                    'Les personnes : la description physique, le caractére, la personnalité',
                    'La santé',
                    'Les loisirs, les sports, les vacances, les voyages',
                    'Le logement : ameublement, équipement',
                    'Le systéme éducatif, les études, la formation'

                ]
            ]
        ]
    ])

    @include('formation.layout.common-elements.study-method',
    [
        'labels'=>[
            'Pédagogie différenciée pour la conduite de l\'apprenant sur la voie de l\'autonomie écrit.',
            'Méthode participative et actionnelle (mises en situation, jeux de réles...)',
            'Discrimination visuelle et auditive a partir d\'exemples phonétiques et homonymes',
            'Carte heuristique',
            'La salle de formation est équipée des vidéoprojecteur, imprimante multifonction, tableau blanc et connexion internet. Accés aux supports de cours.'
        ]
    ])

    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'Évaluation formative des compétences au cours de la formation 3 "aide d\'une grille grâce à laquelle le formateur pourra mesurer les acquisitions.',
            'Évaluation objective afin de mesurer le degré d’autonomie de l\'apprenant.',
            'Les modalités d\'évaluations prennent en compte les activités de classe orales et écrites, le travail effectué en semi-autonomie, les évaluations sur les contenus de cours et la participation (présence, attitude en classe, travail personnel).',
            'Remise des grilles de compétences tout au long du parcours et des attestations en fin de formation.'
        ]
    ])

@endsection


