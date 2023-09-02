@extends('layouts.layout')


@section('quick_links')
    {{--<div class="overview">
        @include('layouts.heading.content_title',['icon'=>'uil uil-tachometer-fast-alt','label'=>'Liens rapide'])

        <div class="boxes">
            @include('layouts.heading.box',['box_number'=>'1','icon'=>'uil uil-user','label'=>count($adherents).' '.'Adherents','data'=>''])
            @include('layouts.heading.box',['box_number'=>'2','icon'=>'uil uil-user-plus','label'=>'Ajouter','data'=>'','url'=>route('adherent.create')])
            @include('layouts.heading.box',['box_number'=>'3','icon'=>'uil uil-external-link-alt','label'=>'Autre actions','data'=>''])
        </div>
    </div>--}}
@endsection

@section('content')
    <ul class="accordion">

        {{-- Age gap --}}
        <li>
            <input type="radio" name="accordion" id="agegap" checked>
            <label for="agegap">Tranche d'âge</label>
            <div class="content">
                <form method="POST" action="{{url('agegap')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class='form-check-inline'>
                            <ul>
                                @foreach ($age_gaps as $age_gap)
                                    <li>{{$age_gap->label}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </fieldset>

                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'agegap','label'=>'Tranche d\'age','required'=>'required','type'=>'text'])
                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Gender --}}
        <li>
            <input type="radio" name="accordion" id="gender">
            <label for="gender">Civilité</label>
            <div class="content">
                <form method="POST" action="{{url('gender')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class="form-check-inline">
                            <ul>
                                @foreach ($genders as $gender)
                                    <li>{{$gender->id}} - {{$gender->label}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'gender','label'=>'Civilité','required'=>'required','type'=>'text'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Years --}}
        <li>
            <input type="radio" name="accordion" id="years">
            <label for="years">Années</label>
            <div class="content">
                <form method="POST" action="{{url('year')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class="form-check-inline">
                            <ol>

                                @foreach ($years as $year)
                                    <li>{{$year->id}} - {{$year->label}}</li>
                                @endforeach

                            </ol>
                        </div>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'year','label'=>'voulez vous ajouter? saisissez la valeur','required'=>'required','type'=>'number'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Groups ---}}
        <li>
            <input type="radio" name="accordion" id="groups">
            <label for="groups">Groupes</label>
            <div class="content">
                <form method="POST" action="{{url('group')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <ul>
                            @foreach ($groups as $group)
                                <li>{{$group->id}} - {{$group->label}}</li>
                            @endforeach
                        </ul>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'group','label'=>'Valeur tranche d\'age','required'=>'required','type'=>'text'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="{{route('group.index')}}">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Income type --}}
        <li>
            <input type="radio" name="accordion" id="incometype">
            <label for="incometype">Type de revenue</label>
            <div class="content">
                <form method="POST" action="{{url('incometype')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class="form-check-inline">
                            <ul>
                                @foreach ($income_types as $incometype)
                                    <li>{{$incometype->id}} - {{$incometype->label}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'incometype','label'=>'Type de revenu','required'=>'required','type'=>'text'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Paiment method --}}
        <li>
            <input type="radio" name="accordion" id="paymentmethod">
            <label for="paymentmethod">Mode de paiment</label>
            <div class="content">
                <form method="POST" action="{{url('paymentmethod')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class="form-check-inline">
                            <ul>
                                @foreach ($payment_methods as $payment_method)
                                    <li>{{$payment_method->id}} - {{$payment_method->label}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'paymentmethod','label'=>'Nouveau mode de paiment','required'=>'required','type'=>'text'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Countries --}}
        <li>
            <input type="radio" name="accordion" id="countries">
            <label for="countries">Pays</label>
            <div class="content">
                <form method="POST" action="{{url('country')}}">
                    @csrf

                    <div class="form-check-inline">
                        <select name="countries" id="countries">
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->phonecode}} - {{$country->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <h4 class="text-dec-u">Ajouter un nouveau pays</h4>
                    @include('layouts.formcontrols.input',['name'=>'country_name','label'=>'Pays','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['name'=>'country_code','label'=>'Code du pays','required'=>'required','type'=>'text'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Activity --}}
        <li>
            <input type="radio" name="accordion" id="activity">
            <label for="activity">Activités</label>
            <div class="content">
                <form method="POST" action="{{url('activity')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class="form-check-inline">
                            <ul>

                                @foreach ($activities as $activity)
                                    <li>{{$activity->id}} - {{$activity->label}} (Group:{{$activity->group_id}})</li>
                                @endforeach

                            </ul>
                        </div>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'activity','label'=>'Activité','required'=>'required','type'=>'text'])
                    <label>Selectionner le groupe pour cet activité</label>
                    <div class="form-check-inline">
                        <select name="groupid" id="countries">
                            @foreach ($groups as $group)
                                <option value="{{$group->id}}">{{$group->id}} - {{$group->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Marital status --}}
        <li>
            <input type="radio" name="accordion" id="maritalstatus">
            <label for="maritalstatus">Situation familiale</label>
            <div class="content">
                <form method="POST" action="{{url('maritalstatus')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class="form-check-inline">
                            <ul>
                                @foreach ($marital_statuses as $marital_status)
                                    <li>{{$marital_status->id}} - {{$marital_status->label}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'maritalstatus','label'=>'Nouveau situation familiale','required'=>'required','type'=>'text'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Legal situation --}}
        <li>
            <input type="radio" name="accordion" id="legalsituation">
            <label for="legalsituation">Situation administrative</label>
            <div class="content">
                <form method="POST" action="{{url('legalsituation')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class="form-check-inline">
                            <ul>
                                @foreach ($legal_situations as $legal_situation)
                                    <li>{{$legal_situation->id}} - {{$legal_situation->label}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'legalsituation','label'=>'Situation administrative','required'=>'required','type'=>'text'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Education level --}}
        <li>
            <input type="radio" name="accordion" id="educationlevel">
            <label for="educationlevel">Situation scolaire</label>
            <div class="content">
                <form method="POST" action="{{url('educationlevel')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class="form-check-inline">
                            <ul>
                                @foreach ($education_levels as $education_level)
                                    <li>{{$education_level->id}} - {{$education_level->label}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'educationlevel','label'=>'Nouvelle valeur','required'=>'required','type'=>'text'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>

        {{-- Teachers --}}
        <li>
            <input type="radio" name="accordion" id="teacher">
            <label for="teacher">Formateurs</label>
            <div class="content">
                <form method="POST" action="{{url('teacher')}}">
                    @csrf
                    <fieldset>
                        <legend>Données existantes</legend>
                        <div class="form-check-inline">
                            <ul>
                                @foreach ($teachers as $teacher)
                                    <li>{{$teacher->id}}
                                        - {{$teacher->family_name}} {{$teacher->first_name}} {{$teacher->personal_phone_number==null ||$teacher->personal_phone_number==''?$teacher->public_phone_number:$teacher->personal_phone_number}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </fieldset>
                    <h4 class="text-dec-u">Ajouter une nouvelle valeur</h4>
                    @include('layouts.formcontrols.input',['name'=>'familyname','label'=>'Nom de famille','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['name'=>'firstname','label'=>'Prénom','required'=>'required','type'=>'text'])
                    @include('layouts.formcontrols.input',['name'=>'personalphonenumber','label'=>'Tel portable','type'=>'tel'])
                    @include('layouts.formcontrols.input',['name'=>'publicphonenumber','label'=>'Tel fixe','type'=>'tel'])
                    @include('layouts.formcontrols.input',['name'=>'email','label'=>'email','required'=>'required','type'=>'email'])

                    <div class="flex space-between">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                        <a class="btn-primary" href="#">Autre</a>
                    </div>
                </form>
            </div>
        </li>
    </ul>

@endsection
