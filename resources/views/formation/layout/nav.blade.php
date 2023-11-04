<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #CB5A28;">
    <div class="container">
        <!-- navbar brand / title -->
        <a class="navbar-brand" href="/">
            <span class="text-light fw-bold fs-3">CDAFAL 68</span>
        </a>
        <!-- toggle button for mobile nav -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Savoirs de base
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2" style="background-color: #CB5A28;">
                        <li><a class="dropdown-item" href="{{ route('sdb.s1') }}" style="">Sessions 1</a></li>
                        <li><a class="dropdown-item" href="{{ route('sdb.s2') }}" style="">Sessions 2</a></li>
                        <li><a class="dropdown-item" href="{{ route('sdb.flyers') }}" style="">Formations de base Flyers</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn dropdown-toggle"  id="dropdownMenuButton3" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Formations linguistiques
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3" style="background-color: #CB5A28;">
                        <li><a class="dropdown-item" href="{{ route('linguistique.le1') }}" style="">FLE LE1, Alphabetisation</a></li>
                        <li><a class="dropdown-item" href="{{ route('linguistique.le2') }}" style="">FLE LE2, Alphabetisation</a></li>
                        <li><a class="dropdown-item" href="{{ route('linguistique.a1') }}" style="">FLE A1, Oral et écrit</a></li>
                        <li><a class="dropdown-item" href="{{ route('linguistique.a2') }}" style="">FLE A2, Oral et écrit</a></li>
                        <li><a class="dropdown-item" href="{{ route('linguistique.b1') }}" style="">FLE B1, Oral et écrit</a></li>
                        <li><a class="dropdown-item" href="{{ route('linguistique.b2') }}" style="">FLE B2, Oral et écrit</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mesure') }}" style="color:white;">Formations sur mesure</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="btn dropdown-toggle"  id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                        Informatique
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="background-color: #CB5A28; color:white">
                        <li><a class="dropdown-item" href="{{ route('informatique.email') }}" >Initiation Internet-Mails</a></li>
                        <li><a class="dropdown-item" href="{{ route('informatique.word') }}" style="">Initiation au logiciel word</a></li>
                        <li><a class="dropdown-item" href="{{ route('informatique.excel') }}" style="">Initiation au logiciel excel</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pourparler') }}" style="color: white;">Pour parler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('formateurs') }}" style="color:white;">Formations de formateurs</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
