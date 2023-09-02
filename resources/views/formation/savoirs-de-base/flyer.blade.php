@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'Formation de base Flyer',
        'subtitles'=>['Acquérir les savoirs de base permettant d\'intégrer toutes formations professionnelles et/ou qualifiantes.'],
        'prerequis'=>'Cette formation est accessible aux salariés issus de tous secteurs d\'activités, d\'un niveau débutant à l\'écrit, souhaitant acquérir des savoirs de bases.',
        'public'=>'Elle s\'adresse également aux salariés ayant une faible maîtrise en lecture, en écriture, en mathématiques et en informatique, et aux salariés motivés dans leur parcours d’apprentissage',
        'imgpath'=>'/images/fle4.png',
        'docpath'=>'/docs/flyers.pdf'
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
            'Acquérir les savoirs de base permettant d\'intégrer toutes formations professionnelles et/ou qualifiantes',
            'Acquérir une meilleure maîtrise de la communication écrite et orale en situation professionnelle.',
            'Lire, écrire, et communiquer pour mieux comprendre et participer aux activités en milieu professionnel.',
            'Consolider ses connaissances en mathématiques et les utiliser dans son cadre professionnel.',
            'Renforcer les compétences du salarié en informatique'
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
    @include('formation.layout.common-elements.study-method',
    []
    )

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

