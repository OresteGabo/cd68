<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>La gestion des operation cdafal (Dashboard)</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dashboardstylefiles/css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="dashboardstylefiles/css/custom.css">

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
        <div class="sidebar-header">
            <h3>
                <img src="/images/logo.png" alt="logo cdafal" class="img-fluid">
                <span>Cdafal 68</span></h3>
        </div>
        <div class="d-flex flex-column">
            @if(session()->has('success'))
                <h1>{{session('success')}}</h1>
            @else

            @endif


            <ul class="list-unstyled component m-0">

                <!--Acceuil-->
                <li class="">
                    <a href="#" class="dashboard"><i class="material-icons">home</i>Acceuil </a>
                </li>


                <!--Dashboard-->
                <li class="active">
                    <a href="#" class="dashboard"><i class="material-icons">dashboard</i>Dashboard </a>
                </li>


                <!--Adherent-->
                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">
                        <i class="material-icons">person</i>Adherents
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li><a href="#">Voir la liste</a></li>
                        <li><a href="#">Ajouter</a></li>
                        <li><a href="#">Modifier</a></li>
                    </ul>
                </li>


                <!--Enfants-->
                <li class="dropdown">
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">
                        <i class="material-icons">child_care</i>Enfants
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu2">
                        <li><a href="#">Ajouter</a></li>
                        <li><a href="#">Supprimer</a></li>
                    </ul>
                </li>


                <!--Cotisation-->
                <li class="dropdown">
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">
                        <i class="material-icons">euro</i>Cotisation
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu3">
                        <li><a href="#">Pages 1</a></li>
                        <li><a href="#">Pages 2</a></li>
                        <li><a href="#">Pages 3</a></li>
                    </ul>
                </li>


                <!-- Activités-->
                <li class="dropdown">
                    <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false"
                       class="dropdown-toggle">
                        <i class="material-icons">construction</i>Activités
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu4">
                        <li><a href="#">Ajouter</a></li>
                        <li><a href="#">Supprimer</a></li>
                    </ul>
                </li>

            </ul>
            <ul class="list-unstyled component m-0">

                <!--Sites des formations-->
                <li class="">
                    <a href="{{route('informatique.word')}}" class="dashboard"><i class="material-icons">home</i>Sites des formations </a>
                </li>


                <!--Dashboard-->
                <li class="">
                    <a href="#" class="settings"><i class="material-icons">settings</i>Paramètres </a>
                </li>


                <!--Logout-->
                <li class="">
                    <a href="#" class="dashboard"><i class="material-icons">logout</i>Déconnection </a>
                </li>


            </ul>
        </div>


    </div>

    <!-------sidebar--design- close----------->



    <!-------page-content start----------->

    <div id="content">

        <!------top-navbar-start----------->

        <div class="top-navbar">
            <div class="xd-topbar">
                <div class="row">
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <span class="material-icons text-white">signal_cellular_alt</span>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control"
                                           placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit" id="button-addon2">Go
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
                            <nav class="navbar p-0">
                                <ul class="nav navbar-nav flex-row ml-auto">
                                    <li class="dropdown nav-item active">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <span class="material-icons">notifications</span>
                                            <span class="notification">4</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">You Have 4 New Messages</a></li>
                                            <li><a href="#">You Have 4 New Messages</a></li>
                                            <li><a href="#">You Have 4 New Messages</a></li>
                                            <li><a href="#">You Have 4 New Messages</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <span class="material-icons">question_answer</span>
                                        </a>
                                    </li>

                                    <li class="dropdown nav-item">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            <img src="img/user.jpg" style="width:40px; border-radius:50%;"/>
                                            <span class="xp-user-live"></span>
                                        </a>
                                        <ul class="dropdown-menu small-menu">
                                            <li><a href="#">
                                                    <span class="material-icons">person_outline</span>
                                                    Profile
                                                </a></li>
                                            <li><a href="#">
                                                    <span class="material-icons">settings</span>
                                                    Settings
                                                </a></li>
                                            <li><a href="#">
                                                    <span class="material-icons">logout</span>
                                                    Logout
                                                </a></li>

                                        </ul>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>

                <div class="xp-breadcrumbbar text-center">
                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home">Acceuil</a></li>
                        <li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
                    </ol>
                </div>


            </div>
        </div>
        <!------top-navbar-end----------->


        <!------main-content-start----------->

        <div class="main-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrapper">

                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                    <h2 class="ml-lg-2">Gestion des adhérents</h2>
                                </div>
                                <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                    <a href="#addAdherentModal" class="btn btn-success" data-toggle="modal">
                                        <i class="material-icons">&#xE147;</i>
                                        <span>Ajouter</span>
                                    </a>
                                    <a href="#deleteAdherentModal" class="btn btn-danger" data-toggle="modal">
                                        <i class="material-icons">&#xE15C;</i>
                                        <span>Supprimer</span>
                                    </a>
                                </div>
                            </div>
                        </div>



                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th><span class="custom-checkbox">
							 <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label></span>
                                </th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Addresse</th>
                                <th>Tel</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($adherents))
                                @foreach($adherents as $adherent)
                                    {{--This div doenst have to be shown, it's purpose is only to set the value to the $user variable--}}
                                    <div class="d-none">{{$user=$users->find($adherent->user_id)}}</div>
                                    <button class="d-none delete_adherent_id" value="{{$adherent->id}}">zkhjbflzh</button>


                                    <tr>
                                        <td><span class="custom-checkbox"></span>
                                            <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                            <label for="checkbox1"></label></td>

                                        <td>{{$user->family_name}} {{$user->first_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$adherent->address}}</td>
                                        <td>{{$adherent->tel}}</td>
                                        {{--<td>
                                            <a href="#editAdherentModal" class="edit" data-toggle="modal" >
                                                <i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i>
                                            </a>
                                            <button value="this is the val" class="deleteAdherentBtn">
                                            <a href="#deleteAdherentModal" class="delete" data-toggle="modal">
                                                <i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i>
                                            </a>
                                            </button>
                                            <form action="/dashboard/{{$user->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button>Complete order</button>
                                            </form>
                                            {{--<button type="button" class="btn btn-danger deleteAdherentBtn" value="{{$adherent->id}}">Delete</button>--
                                            <button type="button" value="{{$adherent->id}}" class="btn btn-danger" data-toggle="modal" onsubmit="return confirm('Voulez vous supprimer cette adherent? l\'operation est irreversible')">DEL</button>

                                        </td>--}}
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('adherent.show', $adherent->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                                <a href="{{ route('adherent.edit', $adherent->id)}}" type="button" class="btn btn-warning"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
                                                <form action="{{ route('adherent.destroy', $adherent->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Etes vous sur de vouloir supprimer cet enregistrement?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger m-0"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            @endforeach
                            @endif
                        </table>
                        </tbody>

                        <div class="clearfix">
                            <div class="hint-text">Montrant <b>{{5<count(isset($adherents)?$adherents:[])? 5:count(isset($adherents)?$adherents:[])}}</b> sur <b>{{count(isset($adherents)?$adherents:[])}}</b></div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#">Prec</a></li>
                                <li class="page-item "><a href="#"class="page-link">1</a></li>
                                <li class="page-item "><a href="#"class="page-link">2</a></li>
                                <li class="page-item active"><a href="#"class="page-link">3</a></li>
                                <li class="page-item "><a href="#"class="page-link">4</a></li>
                                <li class="page-item "><a href="#"class="page-link">5</a></li>
                                <li class="page-item "><a href="#" class="page-link">proc</a></li>
                            </ul>
                        </div>



                    </div>
                </div>


                <?php
                ///TODO THIS MODAL SHOULD BE MOVED INTO A SEPARATE FILE
                ?>
                    <!----add-modal start--------->
                <div class="modal fade" tabindex="-1" id="addAdherentModal" role="dialog">
                    <form method="POST" action="{{route('user.store')}}">
                        @csrf
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ajouter un adherent</h5>
                                    <p class="modal-title">1er étape: Ajouter un utilisateur</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" name="family_name"required>
                                    </div>
                                    <div class="form-group">
                                        <label>Prénom</label>
                                        <input type="text" class="form-control" name="first_name"required>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender_id">Sexe</label>

                                        <div class="d-flex flex-row align-items-center mb-4">

                                            <div class="form-outline flex-fill mb-0">
                                                <input class="form-check-input" type="radio" name="gender_id" id="femaleGender" value="2" checked />
                                                <label class="form-check-label" for="femaleGender">Femme</label>
                                            </div>
                                            <div class="form-outline flex-fill mb-0">
                                                <input class="form-check-input" type="radio" name="gender_id" id="maleGender" value="1" />
                                                <label class="form-check-label" for="maleGender">Homme</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date de naissance</label>
                                        <input type="date" class="form-control" name="dob" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control"  name="adress" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Numéro de tel</label>
                                        <input type="tel" class="form-control">
                                    </div>
                                    <input type="password" name="password" id="pasword" value="MotDePasse">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                                    <button type="submit" class="btn btn-success">Étape suivante</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!----add-modal end--------->





                <!----edit-modal start--------->
                <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Employees</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" required></input>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!----edit-modal end--------->


                <!----delete-modal start--------->
                <div class="modal fade modal-danger" tabindex="-1" id="deleteAdherentModal" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Supprimer un adhérent</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="adherent_delete_id" id="adherent_id">
                                <p>Êtes-vous sûr de vouloir supprimer cet enregistrement ?</p>
                                <p class="text-warning"><small>Cette action ne peut pas être annulée</small></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-success">Comfirmer la suppression</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!----edit-modal end--------->




            </div>
        </div>

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



<!-------complete html----------->






<!-- Optional JavaScript -->

<script>
    $(document).ready(function (){
        $('.deleteAdherentBtn').click(function(e){
            e.preventDefault();
            var adherent_id=$(this).val();
            $('#adherent_id').val(adherent_id);
            $('#deleteAdherentModal').modal('show');

        });

    });
</script>



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="dashboardstylefiles/js/jquery-3.3.1.slim.min.js"></script>
<script src="dashboardstylefiles/js/popper.min.js"></script>
<script src="dashboardstylefiles/js/bootstrap.min.js"></script>
<script src="dashboardstylefiles/js/jquery-3.3.1.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $(".xp-menubar").on('click',function(){
            $("#sidebar").toggleClass('active');
            $("#content").toggleClass('active');
        });

        $('.xp-menubar,.body-overlay').on('click',function(){
            $("#sidebar,.body-overlay").toggleClass('show-nav');
        });

    });
</script>
<script>

</script>
</body>

</html>

