@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN FRANÇAIS',
        'subtitles'=>['Perfectionnement en langua française, Oral et écrit , niveau B1'],
        'prerequis'=>'Ce cours est destiné aux personnes maitrisant le français au niveau A2.',
        'public'=>'Adultes francophones dont la situation professionnelle nécessite une aisance à l\'écrit. ',
        'imgpath'=>'/images/fle3.png',
        'docpath'=>'/docs/b1.pdf'
    ])
    @include('formation.layout.common-elements.duration',
    [
        'totalhours'=>'80',
        'weeklyhours'=>'3',
        'totalweeks'=>'27'
    ])
    @include('formation.layout.common-elements.objectifs',
    [
        'objectifs'=>[
            'Consolider et compléter les acquis en orthographes , grammaire et syntaxe.',
            'Appliquer les règles d\'orthographes, de grammaire et de syntaxe.',
            'Rediger des textes en utilisant les règles de syntaxe et de concordance des temps',

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
                'title'=>'Discrimination orale et écrite de divers sons',
                'progItemElements'=>
                [
                    'Distinguer à l\'oral les principaux sons par opposition',
                    'Comprendre , s\'approprier les graphies des différents sons.',
                    'Appliquer à l\'écrit les règles de sons en position finale.',
                    'Connaître les différents accents et leur utilisation.',
                    'Discriminer les homophones à l\'écrit.'
                ]
            ],
            [
                'title'=>'Orthographe et syntaxe',
                'progItemElements'=>[
                    'Comprendre , s\approprier les graphes des différents sons.',
                    'Appliquer des règles de ponctuations dans la composition écrite.',
                    'Ordonner les mots dans la phrase selon leur nature grammaticale',
                    'Appliquer les règles des consonnes doubles.',
                    'Comprendre l\'antonymie, la paronymie et la sunonimie.'

                ]
            ],
            [
                'title'=>'Grammaire et conjugaison',
                'progItemElements'=>[
                    'Appliquer les règles des accordss du nom et de son déterminant.',
                    'Connaître les caractéristiques et la place des différents adverbes.',
                    'Distinguer les groupes verbaux',
                    'Assimiler les règles de conjugaison et d\'utilisation des temps des principaux modes verbaux',
                    'Appliquer les règles des accords verbaux.',
                    'Respecter les règles de la concordance des temps'
                ]
            ]
        ]
    ])

    @include('formation.layout.common-elements.study-method',
    [
        'labels'=>[
            'Pédagogie différenciée pour la conduite de l\'apprenant sur la voie de l\'autonomie à l\'écrit.',
            'Méthode participative et démonstrative.',
            'Des activités en vue de mettre en application les apprentissages.',
            'La salle de formation est équipée des vidéoprojecteurs, imprimante multifonction, tableau blanc et de connexion internet.',
            'Accès aux support de cours.'
        ]
    ])

    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'Évaluation formative des compétences au cours de la formation à l\'aide d\'une grille grâce à laquelle le formateur pourra mesurer les acquisitions',
            'Evaluation objective afin de mesurer le degré d\'autonomie de l\'apprenant.',
            'Remise des grilles de compétences tout au long du parcours et des attestations en fin de formation.'
        ]
    ])

@endsection


