@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN FRANÇAIS',
        'subtitles'=>['Pratique de l\'oral, de la lecture et de l\'écriture de base en français.','Compréhension et usage des documents administratifs et professionnels'],
        'prerequis'=>'Personnes salariées ou non, ayant une faible maîtrise en lecture, en écriture et souhaitant acquérir des savoirs de base',
        'public'=>'Ce cours est destiné aux personnes en situation d\'illettrisme ',
        'imgpath'=>'/images/french.png',
        'docpath'=>'/docs/session2.pdf'
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
            'S\'impliquer dans leur environnement social, économique et culturel en leurs apportant des savoirs et des connaissances de bases',
            'Consolider et compléter les acquis en savoirs de base',
            'Lire et comprendre des textes longs',
            'Comprendre les écrits administratifs et professionels spécifiques.',
            'Remplir les formulaires et documents professionels propres à la fonction de l\'apprenant dans l\'entreprise.',
            'Rédiger des notes et rapports professionels',
            'Développer et renforcer la capacité de comprehension des écrits, y compris professionels.',
            'Appliquer les principes des quatre opérations de base en calcul',
            'S\'approprier les outils de mesure et de gestion du temps'
        ]
    ])
    @include('formation.layout.common-elements.price')
    @include('formation.layout.common-elements.contact')
    @include('formation.layout.common-elements.program',[
        'prog'=>
        [
            [
                'title'=>'Maîtrise de la lecture',
                'progItemElements'=>
                [
                    'Parfaite et compéter les acquis de base en lecture',
                    'S\'approprier les processus de lecture et de compréhension de textes longs',
                    'Lire et comprendre les différents écrits professionnels'
                ]
            ],
            [
                'title'=>'Utilisation des documents professionels',
                'progItemElements'=>[
                    'Compléter et rédiger des documents professionels',
                    'Se repérer dans les tabmeaux de données professionels',
                    'Compléter les tableaux de données professionels'
                ]
            ],
            [
                'title'=>'Production écrite (16heures)',
                'progItemElements'=>[
                    'Maîtriser à l\'écrit le vocabulaire professionel utilisé par l\'apprenant au quotidien',
                    'Appliquer les règles d\'orthographes , de grammaire et de syntaxe de base',
                    'Rédiger des documents professionels précis et efficace'
                ]
            ],
            [
                'title'=>'Consolider ses savoirs de base en mathématique',
                'progItemElements'=>[
                    'Comprendre les systèmes de mesure et leurs unités',
                    'Maîtriser les 4 opérations de nombres entier en situation professionelle',
                    'Comprendre et utiliser le sens des opérations en situation professionnelle',
                    'Calculer des stocks, des quantités, des rapports.'
                ]
            ],
            [
                'title'=>'Se repérer dans l\'espace et le temps',
                'progItemElements'=>[
                    'Se repérer dans les tableaux de données et dans un plan',
                    'Utiliser des taleaux , des listings, et des graphiques',
                    'Lire et établir un planning'
                ]
            ]
        ]
    ])


    @include('formation.layout.common-elements.animation',
    [
        'anItems'=>[
            'Alternance entre méthode participative et methode démonstratives pour la pratique de la lecture de l\'écriture',
            'Activités de lecture et d\'écriture permettant de mettre en application les apprentissages. Prise en compte de l\'expérience professionelle de l\'apprenant'
        ]
    ])
    @include('formation.layout.common-elements.study-method')

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
