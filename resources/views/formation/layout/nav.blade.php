<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light pt-5 pb-4">
    <div class="container-xxl">
        <!-- navbar brand / title -->
        <a class="navbar-brand" href="#intro">
        <span class="text-secondary fw-bold flex">
          <span class="material-symbols-outlined fw-bold fs-1">
            school
            </span>
          CDAFAL 68<br><a href="#"><span class="material-symbols-outlined">home</span></a>
        </span>
        </a>
        <!-- toggle button for mobile nav -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Informatique
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{route('informatique.email')}}" title="A destination des personnes désirants se familiariser avec l'outil informatique et gagner en autonomie dans les démarches administratives de la vie quotidienne.">Initiation Internet-Mails</a></li>
                            <li><a class="dropdown-item" href="{{route('informatique.word')}}" title="Formation en informatique pour les adultes nécessitant une aisance en word.">Initiation au logiciel word</a></li>
                            <li><a class="dropdown-item" href="{{route('informatique.excel')}}" title="Formation en informatique pour adultes salariés souhaitant s'initier à excel.">Initiation au logiciel excel</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('mesure')}}" title="Destiné à des jeunes mineurs en formation <> prise en charge par l'Assistance Sociale">Formations sur mesure</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pourparler')}}" title="Ce cours est destiné aux adultes allophones ou en situation souhaitant développer leurs compétences langagières,travailler la prononciation pour favoriser leur intégration sociale">Pour parler</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Savoirs de base
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{route('sdb.s1')}}" title="A destination des salariés ayant une faible maitrise en lecture, écriture et en mathématiques">Sessions 1</a></li>
                            <li><a class="dropdown-item" href="{{route('sdb.s2')}}" title="A destination des salariés ayant une faible maitrise en lecture, écriture et souhaitant acquérir des savoirs de base">Sessions 2</a></li>
                            <li><a class="dropdown-item" href="{{route('sdb.flyers')}}" title="Acquérir les savoirs de base permettant d'intégrer toutes formations professionnelles et/ou qualifiantes.">Formations de base Flyers</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Formations linguistiques
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{route('linguistique.le1')}}" title="FLE LE1 (Français langue étrangère Niveau LE1) Ce cours est destiné aux personnes qui ne parlent ou n'écrivent pas le francais ou ayant de graves problèmes d'illettrisme. Il conviendra que ce type de formation exige un volume horaire important pour la maitrise des fondamentaux du francais.">FLE LE1, Alphabetisation</a></li>
                            <li><a class="dropdown-item" href="{{route('linguistique.le2')}}" title="FLE LE2 (Français langue étrangère Niveau LE2) Favoriser l'intégration sociale et professionnelle des personnes en situation d'analphabétisation ou d'illettrisme par l'apprentissage de la langue francaise. ">FLE LE2, Alphabetisation</a></li>
                            <li><a class="dropdown-item" href="{{route('linguistique.a1')}}" title="FLE A1 (Français langue étrangère Niveau A1) Ce cours est destiné aux personnes débutantes en francais ayant suivi une formation en alphabétisation ou ayant obtenu LE2.">FLE A1, Oral et écrit</a></li>
                            <li><a class="dropdown-item" href="{{route('linguistique.a2')}}" title="FLE A2 (Français langue étrangère Niveau A2) Favoriser l'intégration sociale et professionnelle des personnes souhaitant durablement ou définitivement en France par l'apprentissage de la langue et de la culture francaise.">FLE A2, Oral et écrit</a></li>
                            <li><a class="dropdown-item" href="{{route('linguistique.b1')}}" title="FLE B1 (Français langue étrangère Niveau B1) Adultes francophones dont la situation professionnelle nécessite une aisance à l'écrit. Ce cours est destiné aux personnes maitrisant le francais.">FLE B1, Oral et écrit</a></li>
                            <li><a class="dropdown-item" href="{{route('linguistique.b2')}}" title="FLE B2 (Français langue étrangère Niveau B2) Ce cours est destiné aux personnes ayant une bonne connaissance de la langue francaise ou maitrisant le francais au niveau B1">FLE B2, Oral et écrit</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
