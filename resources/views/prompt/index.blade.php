@extends('dashboard.layouts.layout')
@section('main-content')
    <?php
    use App\Models\User;
    use App\Models\Adherent;
    use App\Models\Entertainment;
    ?>


    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">

                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Gestion des adhérents {{count($adherents)}}/{{count(Adherent::all())}}</h2>
                            <form action="{{ route('adherents.updatePerPage') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nombreAfficher">Nombre a afficher:</label>
                                    <select class="form-control" id="nombreAfficher" name="perpage" onchange="this.form.submit()">
                                        <option value=""></option>
                                        <option value="10" @if($perPage == 10) selected @endif>10</option>
                                        <option value="20" @if($perPage == 20) selected @endif>20</option>
                                        <option value="50" @if($perPage == 50) selected @endif>50</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </form>
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
                                <td>{{strtolower($user->email)}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->tel}}</td>
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
                    </tbody>
                </table>











                <div class="clearfix">
                    {{ $adherents->links('vendor.pagination.custom') }}
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
                            <p>{{route('user.store')}}</p>
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" name="family_name" value="family name"required>
                            </div>
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" class="form-control" name="first_name" value="first name"required>
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
                                <input type="date" class="form-control" name="dob" value="2015-07-22"
                                       min="1900-01-01" max="2023-12-31" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="email@name.com"required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control"  name="address" value="11 kenze street" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Numéro de tel</label>
                                <input type="tel" class="form-control" name="tel" value="9876543">
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


@endsection
