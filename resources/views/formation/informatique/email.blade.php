@extends('formation.layout.layout')

@section('content')


    <!-- main image & intro text -->
    @include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN INFORMATIQUE',
        'subtitles'=>['Initiation Internet - Mails'],
        'public'=>'Toute personne désirant se familiariser avec l\'outil informatique et gagner en autonomie dans les démarches administratives de la vie quotidienne.',
        'imgpath'=>'/images/email.png',
        'docpath'=>'/docs/email.pdf'
    ])
    {{--@include('formation.layout.common-elements.intro',
    [
        'title'=>'FORMATION EN INFORMATIQUE',
        'subtitles'=>['Initiation Internet - Mails'],
        'public'=>'Toute personne désirant se familiariser avec l\'outil informatique et gagner en autonomie dans les démarches administratives de la vie quotidienne.',
        'imgpath'=>'/images/email.png',
        'docpath'=>'/docs/email.pdf'
    ])--}}
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
            'Maîtriser la recherche d\'informations sur internet.',
            'Contacter les différents organismes par mail.',
            'Consulter et gérer la boite mail en autonomie.'
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
                'title'=>'Rechercher des informations sur internet',
                'progItemElements'=>
                [
                    'Connaitre les bases d\'utilisation de l\'ordinateur.',
                ]
            ],
            [
                'title'=>'Se familiariser avec l\'ordinateur',
                'progItemElements'=>[
                    'Savoir consulter des pages Web.',
                    'Rechercher et conserver des informations.',
                    'Sécuriser la navigation.'
                ]
            ],
            [
                'title'=>'Gérer sa boite mail en autonomie',
                'progItemElements'=>[
                    'Savoir créer une boite mail.',
                    'Savoir créer et envoyer un mail',
                    'Savoir consulter sa boite mail'
                ]
            ]
        ]
    ])

    @include('formation.layout.common-elements.study-method',
    [
        'labels'=>[
            'A la fois théorigues et démonstrative, les méthodes pédagogiques sont appréhendées au travers de mises en situation.',
            'Lasalle de formation est équipée des ordinateurs fixes et portables avec logiciels appropriés, tablettes, vidéoprojecteur, imprimante multifonction, tableau blanc et connexion internet.',
            'Accés aux supports de cours.'
        ]
    ])

    @include('formation.layout.common-elements.evaluation',
    [
        'evaluationItems'=>[
            'Test de positionnement pour confirmer le niveau A2 desapprenants avant la formation',
            'Exercices pratiques tout au long de la formation.',
            'Questionnaire de satisfaction pour les apprenants.',
            'Remise des grilles de compétences tout au long du parcours et des attestations en fin de formation.'
        ]
    ])

@endsection
