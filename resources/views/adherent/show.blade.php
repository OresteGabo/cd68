<?php
use App\Models\Year;
    ?>
@extends('dashboard.layouts.layout')
@section('main-content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>{{ $user->id }} {{ $user->family_name }} {{ $user->first_name }}</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <strong>Nom de famille:</strong> {{ $user->family_name }}<br>
                        <strong>Prénom:</strong> {{ $user->first_name }}<br>
                        <strong>Date de naissance:</strong> {{ $user->dob }} ( {{$age}} ans)<br>
                        <strong>Email:</strong> {{ $user->email }}<br>
                        <strong>Tel:</strong> {{ $user->tel }}<br>
                    </div>
                    <div class="col-md-6">
                        <strong>Tranche d'age:</strong> {{ $age_gap->label }}<br>
                        <strong>Ville:</strong> {{ $city->label }}<br>
                        <strong>QPV:</strong> {{ $adherent->QPV ? 'Oui' : 'No' }}<br>
                        <strong>Lieu de naissance:</strong> {{ $place_of_birth->label }}<br>
                        <strong>Nationalité:</strong> {{ $citizenship->label }}<br>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <strong>Legal Situation:</strong> {{ $legal_situation->label }}<br>
                        <strong>Status:</strong> {{ $marital_status->label }}<br>
                        <strong>Revenu:</strong> {{ $income_type->label }}<br>
                        <strong>Registration Date:</strong> {{ $adherent->registration_date }}<br>
                        <strong>Date d'entré en France:</strong> {{ $adherent->french_entry_date }}<br>
                    </div>
                    <div class="col-md-6">
                        <strong>Education:</strong> {{ $education_level->label }}<br>
                        <strong>Date de sortie:</strong> {{ $adherent->exit_date }}<br>
                        <strong>CIR:</strong> {{ $adherent->CIR ? 'Oui' : 'No' }}<br>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <a href="{{ route('adherent.edit', $adherent->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('adherent.destroy', $adherent->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Etes vous sur de vouloir supprimer cet enregistrement?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-0">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 mb-5">
        <div class="row ">
            <div class="col-md-9 offset-md-1">
                <h2>Les Cotisations</h2>

                <!-- Accordéon -->
                <div id="accordionPaiements">
                    <div class="card">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                    <h2 class="ml-lg-2">Les cotisations de la personne</h2>
                                </div>
                                <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center"  >
                                    <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Voir/cacher les Cotisations
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionPaiements">
                            <div class="card-body">
                                @if(count($payments)==0)
                                    <div class="text-center">
                                    <span class=" border border-info p-2 rounded" >La liste est vide</span>
                                    </div>
                                @else
                                <!-- Tableau pour afficher les paiements -->
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Trimestre</th>
                                        <th scope="col">Montant(Euro)</th>
                                        <th scope="col">Type de paiment</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($payments as $payment)
                                        <div class="d-none">
                                            {{$payment_method=$paymentMethods->find($payment->payment_methods_id)}}
                                            {{$term=$terms->find($payment->terms_id)}}
                                            {{$year=$years->find($term->year_id)}}

                                        </div>
                                        @if($payment->adherents_id === $adherent->id)
                                        <tr>
                                            <th>{{$loop->index+1}}</th>
                                            <td>Trim {{$term->label}}   -  {{$year->label}}</td>
                                            <td>{{$payment->amount}}</td>
                                            <td>{{$payment_method->label}}</td>
                                            <td></td>
                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de Paiement -->
                <h2>Saisir le nouveau paiements</h2>
                <form method="POST" action="{{route('payment.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="amount">Montant:</label>
                        <input type="number" class="form-control" id="amount" name="amount" required>
                    </div>
                    <div class="form-group d-none">
                        <label for="adherent">Adherent</label>
                        <input type="number" class="form-control" id="adherent" name="adherent" placeholder="{{$adherent->id}}"  value="{{$adherent->id}}"required>
                    </div>
                    <div class="form-group">
                        <label for="term">Trimestre:</label>
                        <select class="form-control" id="methodePaiement" name="term">
                            @foreach($terms as $term)
                                <div class="d-none">
                                        {{$year=$years->find($term->year_id)}}
                                </div>
                                <option value="{{$term->id}}" type="text" class="form-control" id="term" name="" required>Trimestre {{$term->label}} - {{$year->label}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="methodePaiement">Méthode de Paiement:</label>
                        <select class="form-control" id="methodePaiement" name="payment_method">
                            @foreach($paymentMethods as $paymentMethod)
                                <option value="{{$paymentMethod->id}}">{{$paymentMethod->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter le Paiement</button>
                </form>
            </div>
        </div>
    </div>

@endsection
