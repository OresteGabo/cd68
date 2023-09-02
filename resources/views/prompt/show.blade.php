@extends('dashboard.layouts.layout')
@section('main-content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>User Profile</h1>
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
                        <strong>CIR:</strong> {{ $adherent->CIR ? 'Yes' : 'No' }}<br>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <a href="{{-- route('user.edit', $user->id) --}}" class="btn btn-primary">Modifier</a>
                        <a href="{{-- route('user.delete', $user->id) --}}" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
