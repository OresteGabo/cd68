<?php
use App\Models\User;
use App\Models\Adherent;
use App\Models\Entertainment;
use App\Models\City;

?>


@extends('dashboard.layouts.layout')
@section('main-content')



    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">

                <div id="accordionAdherents">
                    <div class="card">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                    <h2 class="ml-lg-2">Gestion des adhérents (Total : {{count(Adherent::all())}} Adherents)</h2>
                                    {{--<select name="perPage">

                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="250">250</option>
                                        <option value="500">500</option>
                                        <option value="5000">5000</option>
                                    </select>
                                    <input type="hidden" name="perPage" id="perPage">--}}




                                    <span class="form-inline">
                                    <form method="GET" action="{{ route('adherent.index') }}">
                                        <label for="perPage">Par Page:</label>

                                        <select name="perPage" id="perPage" onchange="this.form.submit()">
                                            @for ($i =0; $i <= sizeof(Adherent::all()); $i+=50)
                                                @if($i!=0)
                                                <option value="{{$i}}" {{ Request::get('perPage') == $i ? 'selected' : '' }}>{{$i}}</option>
                                                @endif
                                            @endfor
                                        </select>
                                        <noscript><input type="submit" value="Submit"></noscript>
                                    </form>
                                    {{--<form method="GET" action="#">
                                        <label for="perPage">Années</label>

                                        <select name="perPage" id="#" onchange="this.form.submit()">
                                            <option value="{{ date("Y")}}" {{ Request::get('perYear',  date("Y")) ==  date("Y") ? 'selected' : '' }}>{{ date("Y")}}</option>
                                            <option value="2024" {{ Request::get('perYear') == 2024 ? 'selected' : '' }}>2024</option>
                                            <option value="2023" {{ Request::get('perYear') == 2023 ? 'selected' : '' }}>2023</option>
                                            <option value="2022" {{ Request::get('perYear') == 2022 ? 'selected' : '' }}>2022</option>
                                            <option value="2021" {{ Request::get('perYear') == 2021 ? 'selected' : '' }}>2021</option>
                                            <option value="2020" {{ Request::get('perYear') == 2020 ? 'selected' : '' }}>2020</option>
                                            <option value="2019" {{ Request::get('perYear') == 2019 ? 'selected' : '' }}>2019</option>
                                            <option value="{{sizeof(Adherent::all())}}" {{ Request::get('perPage') == sizeof(Adherent::all()) ? 'selected' : '' }}>TOUS:{{sizeof(Adherent::all())}}</option>
                                        </select>
                                        <noscript><input type="submit" value="Submit"></noscript>
                                    </form>--}}
                                        {{--<form name="perYears" id="#" onchange="this.form.submit()">
                                            <label>Select Years:</label>
                                            <select id="year-select" multiple>
                                                <!-- Add the current year as the default selected option -->
                                                <option value="{{ date('Y') }}" selected>{{ date('Y') }}</option>
                                                <!-- Generate options for the past and future years -->
                                                @for ($i = date('Y') + 5; $i >= date('Y') + 5; $i++)
                                                    <!-- Exclude the current year (already selected) -->
                                                    @if ($i != date('Y'))
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endif
                                                @endfor
                                            </select>
                                            <br><br>
                                            <input type="button" value="Submit" onclick="{{--showSelectedYears()--}">
                                        </form>--}}
                                    </span>

                                </div>
                                <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center"  >

                                    <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseAdherents" aria-expanded="true" aria-controls="collapseOne">
                                        Voir/cacher les adhérents
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div id="collapseAdherents" class="collapse show" aria-labelledby="headingAdherents" data-parent="#accordionAdherents">
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>{{--<span class="custom-checkbox">
                                     <input type="checkbox" id="selectAll">
                                                <label for="selectAll"></label></span>--}}
                                </th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Addresse</th>
                                <th>CP/Ville</th>
                                <th>Tel</th>
                                <th>CIR</th>
                                <th>QPV</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($adherents))
                                @foreach($adherents as $adherent)
                                    <?php




                                        ?>
                                    {{--This div doenst have to be shown, it's purpose is only to set the value to the $user variable--}}
                                    <div class="d-none">{{$user=$users->find($adherent->user_id)}}</div>
                                    <button class="d-none delete_adherent_id" value="{{$adherent->id}}">zkhjbflzh</button>


                                    <tr>
                                        <td>{{--<span class="custom-checkbox"></span>--}}
                                            {{--<input type="checkbox" id="checkbox1" name="option[]" value="1">
                                            <label for="checkbox1"></label>--}}
                                        </td>

                                        <td>{{$user->family_name}} {{$user->first_name}}</td>
                                        <td>{{strtolower($user->email)}}</td>
                                        <td>{{$user->address}}</td>
                                        <?php
                                            $city=City::find($user->city_id);
                                            ?>
                                        <td>{{(($city??"")->cp)??""}} - {{(($city??"")->label)??""}}</td>
                                        <td>{{$user->tel}}</td>
                                        <td><h6 class="mb-0"><span class="badge {{$adherent->CIR === 1 ?"text-success":"text-danger"}} "><span class="material-symbols-outlined">{{$adherent->CIR?"done":"close"}}</span></span></h6></td>
                                        <td><h6 class="mb-0"><span class="badge {{$adherent->QPV === 1?"text-success":"text-danger"}} "><span class="material-symbols-outlined">{{$adherent->QPV?"done":"close"}}</span></span></h6></td>

                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('adherent.show', $adherent->id) }}" type="button" class="btn btn-secondary"><span class="material-symbols-outlined text-white">visibility</span></a>
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
<script>
    $(document).on('change', '#perPage', function() {
        $.ajax({
            url: '/adherent',
            method: 'get',
            data: {
                perPage: $(this).val()
            },
            success: function(data) {
                // Re-render the view with the new perPage value.
                $('#adherent').html(data);
            }
        });
    });

</script>


@endsection
