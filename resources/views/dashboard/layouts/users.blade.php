<?php

use App\Models\User;
use App\Models\Adherent;
use App\Models\Staff;
?>


<div class="row">
    <div class="col-md-12">
        <div class="table-wrapper">

            <div id="accordionUsers">
                <div class="card">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">Gestion des Utilisateurs (Total: {{count(User::all()) }} Utilisateurs dont {{count(Adherent::all())}} adhérents et {{count(Staff::all())}} membre du personnels)</h2>
                            </div>
                            <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                <a href="#addAdherentModal" class="btn btn-success" data-toggle="modal">
                                    <i class="material-icons">&#xE147;</i>
                                    <span>Ajouter</span>
                                </a>
                                <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
                                    Voir/cacher les utilisateurs
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="collapseUsers" class="collapse show" aria-labelledby="headingUsers" data-parent="#accordionUsers">
                <div class="card-body">
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
                        @if(isset($users))
                            @foreach($users as $user)
                                <tr>
                                    <td><span class="custom-checkbox"></span>
                                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                        <label for="checkbox1"></label></td>

                                    <td>{{$user->family_name}} {{$user->first_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>{{$user->tel}}</td>

                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{route('user.show', $user->id) }}" type="button" class="btn btn-secondary"><span class="material-symbols-outlined text-white">visibility</span></a>
                                            <a href="{{ route('user.edit', $user->id)}}" type="button" class="btn btn-warning"><span title="Modifier" class="material-symbols-outlined">edit</span></a>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Etes vous sur de vouloir supprimer cet enregistrement?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger m-0"><span title="Supprimer définitivement" class="material-symbols-outlined">delete_forever</span></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                        @endforeach
                        @endif
                        </tbody>
                    </table>
                    <div class="clearfix">
                        {{ $users->appends(['kids'=>$kids->currentPage(),'staffs'=>$staffs->currentPage(),'adherents'=>$adherents->currentPage()])->links('vendor.pagination.custom') }}
                    </div>
                </div>
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
