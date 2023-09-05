

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <title>crud dashboard</title>
 {{--   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dashboardstylefiles/css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="dashboardstylefiles/css/custom.css">
--}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('dashboardstylefiles/css/bootstrap.min.css')}}">
    <!----css3---->
    <link rel="stylesheet" href="{{asset('dashboardstylefiles/css/custom.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

    <!--google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

</head>
<body>


<div class="wrapper">

    <div class="body-overlay"></div>

    <!-------sidebar--design------------>

    <div id="sidebar">
        <div class="d-flex flex-column justify-content-between vh-100">
            <div>
                <div class="sidebar-header ">
                    <h3>
                        <img src="/images/logo.png" alt="logo cdafal" class="img-fluid">
                        <span>Cdafal 68</span></h3>
                </div>
                {{--<div class="{{--sidebar flex-column d-flex-}} d-flex flex-column justify-content-between  ">--}}

                <ul class="{{--list-unstyled component m-0--}} ">

                        <!--Acceuil-->
                        {{--<li class="{{(strpos($_SERVER['REQUEST_URI'], '/dashboard/') !== false) ? "active":""}}">
                            <a href="#" class="dashboard"><i class="material-icons">home</i>{{$_SERVER['REQUEST_URI']}}Acceuil </a>
                        </li>--}}


                        <!--Dashboard-->

                        <li class="{{(stripos($_SERVER['REQUEST_URI'], '/dashboard') !== false) ? "active":""}}">
                            <a href="/dashboard" class="dashboard"><i class="material-icons">dashboard</i> dashboard</a>
                        </li>


                        <!--Adherent-->
                        <li class="dropdown {{(stripos($_SERVER['REQUEST_URI'], '/adherent') !== false) ? "active":""}}">
                            <a href="#adherent" data-toggle="collapse" aria-expanded="false"
                               class="dropdown-toggle">
                                <i class="material-icons">person</i>Adherents
                            </a>
                            <ul class="collapse list-unstyled menu" id="adherent">
                                <li><a href="/adherent">Voir la liste</a></li>
                                <li><a href="/adherent/create">Ajouter</a></li>
                            </ul>
                        </li>


                        <!--Enfants-->
                        <li class="dropdown {{(stripos($_SERVER['REQUEST_URI'], '/kid') !== false) ? "active":""}}">
                            <a href="#kid" data-toggle="collapse" aria-expanded="false"
                               class="dropdown-toggle">
                                <i class="material-icons">child_care</i>Enfants
                            </a>
                            <ul class="collapse list-unstyled menu" id="kid">
                                <li><a href="{{route('kid.index')}}">Toute la liste</a></li>
                                <li><a href="{{route('kid.create')}}">Ajouter</a></li>
                            </ul>
                        </li>


                        <!--Cotisation-->

                    <li class="{{(stripos($_SERVER['REQUEST_URI'], '/payment') !== false) ? "active":""}}">
                        <a href="#" class="payment"><i class="material-icons">euro</i> Cotisation</a>
                    </li>


                        <!-- Activités-->
                        <li class="{{(stripos($_SERVER['REQUEST_URI'], '/entertainment') !== false) ? "active":""}}">
                            <a href="/entertainment" class="dashboard"><i class="material-icons">construction</i> Les ateliers</a>
                        </li>



                    </ul>
            </div>
            <div>
                <ul class="mt-5">

                    <!--Sites des formations-->
                    <li class="">
                        <a href="{{route('formation.index')}}" class="dashboard"><i class="material-icons">home</i>Sites des formations </a>
                    </li>


                    <!--Dashboard-->
                    <li class="">
                        <a href="/settings" class="settings"><i class="material-icons">settings</i>Paramètres</a>
                    </li>


                    <!--Logout-->
                    <li class="">
                        <a href="{{ route('logout') }}" class="dashboard"><i class="material-icons">logout</i>Déconnection </a>
                    </li>


                </ul>
            </div>
        </div>
</div>

        {{--</div>--}}


    </div>


    <!-------sidebar--design- close----------->



    <!-------page-content start----------->

    <div id="content">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!------top-navbar-start----------->

        <div class="top-navbar">
            <div class="xd-topbar">
                <div class="row">
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <span class="material-symbols-outlined">fullscreen</span>
                        </div>
                    </div>


                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
                            <nav class="navbar p-0">
                                <?php
                                    use Illuminate\Support\Facades\DB;
                                    $prompts=App\Models\Prompt::all();
                                $user_id=auth()->user()->id;
                                $staffMember = App\Models\Staff::where('user_id', $user_id)->first();
                                if($staffMember!=null && $staffMember->is_admin){

                                }
                                ?>
                                <ul class="nav navbar-nav flex-row ml-auto">
                                    <li class=" nav-item active">

                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="material-icons">question_answer</span>
                                            @if($staffMember!=null && ($staffMember->is_admin ||$staffMember->is_dev ))
                                                <span class="notification">{{sizeof($prompts)}}</span>
                                            @else
                                                <span class="notification">0</span>
                                            @endif
                                        </a>
                                        @if($staffMember!=null && ($staffMember->is_admin ||$staffMember->is_dev ))
                                            <ul class="dropdown-menu">
                                                    <ul class="list-group">
                                                        @foreach($prompts as $prompt)
                                                            <li class="list-group-item d-flex justify-content-between" title="{{ $prompt->email }}">

                                                                <span class="d-flex justify-content-start ">
                                                                    <span class="material-symbols-outlined">
                                                                        @switch($prompt->request_type)
                                                                            @case(1)
                                                                                attach_money
                                                                            @case(2)
                                                                                school
                                                                                @break
                                                                            @case(3)
                                                                                store
                                                                                @break
                                                                            @case(4)
                                                                                report
                                                                                @break
                                                                            @case(5)
                                                                                other_admission
                                                                            @break
                                                                        @endswitch

                                                                    </span>
                                                                    <span class="description">{{ $prompt->description }}</span>

                                                                </span>
                                                                {{--<form action="{{route('prompt.destroy', $prompt->id)}}"></form>
                                                                <button class="btn btn-primary">Effacer</button>
                                                                </form>--}}
                                                                <form action="{{ route('prompt.destroy', $prompt->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Etes vous sur de vouloir supprimer ce message? Assurez vous que la demande a été repondu')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger m-0">Effacer{{--<i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>--}}</button>
                                                                </form>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                            </ul>
                                        @endif
                                    </li>
                                    {{--<li class=" nav-item active">

                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="material-icons">notifications</span>
                                            <span class="notification">4</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            @if( $data['LoggedUserInfo']['is_admin']?? 0 == 1 )
                                                <li><a href="#">Admin</a></li>
                                            @elseif($data['LoggedUserInfo']['is_editor']?? 0 == 1 )
                                                <li><a href="#">is editor</a></li>
                                            @elseif($data['LoggedUserInfo']['is_user'] ?? 0 == 1)
                                                <li><a href="#">is user</a></li>
                                            @endif

                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <span class="material-icons">question_answer</span>
                                        </a>
                                    </li>--}}

                                    <li class="dropdown nav-item">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="material-symbols-outlined">account_circle</span>
                                            <span class="xp-user-live"></span>
                                        </a>
                                        <ul class="dropdown-menu small-menu">
                                            <li><a href="#">
                                                    <span class="material-icons">person_outline</span>

                                                    {{-- session('loggedUser')->family_name }} {{ session('loggedUser')->first_name --}}
                                                    @auth{{auth()->user()->family_name}} {{auth()->user()->first_name}}@endauth
                                                </a></li>
                                            <li><a href="#">
                                                    <span class="material-icons">settings</span>
                                                    Settings
                                                </a></li>

                                            <li><a href="{{route('logout')}}">
                                                    <span class="material-icons">logout</span>
                                                    Logout
                                                </a></li>
                                            <ul>
                                                <li></li>
                                            </ul>

                                        </ul>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>




            </div>
        </div>
        <!------top-navbar-end----------->


        <!------main-content-start----------->

        {{--<div class="main-content">--}}

            @yield('main-content')

        {{--</div>--}}

        <!------main-content-end----------->



        <!----footer-design------------->

        <footer class="footer">
            <div class="container-fluid">
                <div class="footer-in">
                    <!--<p class="mb-0">&copy 2021 Vishweb Design . All Rights Reserved.</p>-->
                </div>
            </div>
        </footer>




    </div>


</div>




<!----------html code compleate----------->









<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('dashboardstylefiles/js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('dashboardstylefiles/js/popper.min.js')}}"></script>
<script src="{{asset('dashboardstylefiles/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboardstylefiles/js/jquery-3.3.1.min.js')}}"></script>


<script type="text/javascript">

    $(document).ready(function(){
        $(".xp-menubar").on('click',function(){
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
        });

        $(".xp-menubar,.body-overlay").on('click',function(){
            $('#sidebar,.body-overlay').toggleClass('show-nav');
        });

    });




</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
{{--
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}



</body>

</html>



