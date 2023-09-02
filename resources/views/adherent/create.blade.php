<?php
use App\Models\AgeGap;
use App\Models\Adherent;
    ?>
@extends('dashboard.layouts.layout')
@section('main-content')
    @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Formulaire d\'adhésion'])

    <div class="container mt-5">
        <div class="row justify-content-start">
            <div class="col-md-9">
                <form method="POST" action="{{route('adherent.store')}}">
                    @csrf
                    @if (session()->has('usercreated'))
                    <div class="alert alert-info" role="alert">
                        Avec les information de l'utilisateurs, vous allez completer son adhésion!
                        <ul>
                            <li>Nom de famille:  <b>{{session('createduser')->family_name}}</b></li>
                            <li>Prénom:  <b>{{session('createduser')->first_name}}</b></li>
                            <li>Email:  <b>{{session('createduser')->email}}</b></li>
                            <li>Date de naissance <b>{{session('createduser')->dob}}</b></li>
                            {{--<li>Created user id: <b>{{session('createduser')}}</b></li>--}}
                        </ul>
                    </div>

                    <div class="invisible">
                        <label for="user_id">Utilisateur (déjà selectioné)</label>
                        <input type="text" name="user_id" id="user_id" value="{{session('createduser')->id}}" placeholder="{{session('createduser')->id}} " >
                    </div>

                    @else
                        <div class="mb-3">
                            <select name="user_id" id="user_id" class="form-select">
                                <label for="user_id">Utilisateur</label>
                                @foreach ($users as $user)
                                    <div  class="d-none">
                                        {{$adherentDoesNotExist = (Adherent::where('user_id', $user->id)->get())->isEmpty()}}
                                    </div>
                                    @if($adherentDoesNotExist)
                                        <option value="{{$user->id}}">{{ $user->id }} : {{ $user->email }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    @endif



                    <div class="mb-3">
                        {{--<label for="user_id" class="form-label">Utilisateur:</label>

                        @if(session('createduser')!=null && isset($user->id))
                            <label for="user_id">Utilisateur (déjà selectioné)</label>
                            <input type="text" name="user_id" id="user_id" value="{{$user->id}}" placeholder="{{ $user->id }} : {{ $user->email }}" disabled>
                        @else
                            <select name="user_id" id="user_id" class="form-select">
                                <label for="user_id">Utilisateur</label>
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{ $user->id }} : {{ $user->email }}</option>
                                @endforeach
                            </select>
                        @endif--}}







    {{--<select name="user_id" id="user_id" class="form-select"  {{session('createduser')==null?"":"disabled"}}">
        <label for="user_id" >Utilisateurs</label>
        @foreach ($users as $user)

            <option value="{{$user->id}}" {{session('createduser')==$user->id? }}>
                @if(isset($user->id))
                    {{ $user->id }} : {{ $user->email }}
                @else

                @endif
            </option>}
            hello
        @endforeach--}

        @include('layouts.selects.options',['data_array'=>$users])
    </select>--}}
    <div id="user_id-error-msg" class="invalid-feedback"></div>
</div>
@include('layouts.formcontrols.select',['name'=>'city_id','label'=>'Adresse (Ville - CP)','required'=>'required','data_array'=>$cities])

@include('layouts.formcontrols.select',['value'=>'1','name'=>'education_level_id','label'=>'Education','required'=>'required','data_array'=>$education_levels])

<label for="CIR">CIR:</label>
<div class="checkbox-container">
    <input type="checkbox" id="CIR" name="CIR">
    <!--<span class="checkmark"></span>-->
</div>
<label for="QPV">QPV:</label>
<div class="checkbox-container">
    <input type="checkbox" id="QPV" name="QPV">
    <!--<span class="checkmark"></span>-->
</div>
@include('layouts.formcontrols.select',['value'=>'2','name'=>'marital_status_id','label'=>'Situation familiale','required'=>'required','data_array'=>$marital_statuses])
@include('layouts.formcontrols.select',['value'=>'3','name'=>'income_type_id','label'=>'Revenu','required'=>'required','data_array'=>$income_types])
@include('layouts.formcontrols.select',['name'=>'place_of_birth','label'=>'Lieu de naissance','required'=>'required','data_array'=>$countries])
@include('layouts.formcontrols.select',['name'=>'citizenship','label'=>'Nationalité','required'=>'required','data_array'=>$countries])
@include('layouts.formcontrols.select',['value'=>'2','name'=>'legal_situation_id','label'=>'Situation administrative','required'=>'required','data_array'=>$legal_situations])
@include('layouts.formcontrols.input',['value'=>'2000-02-03','name'=>'registration_date','label'=>'Date d\'adhésion','required'=>'required','type'=>'date'])
@include('layouts.formcontrols.input',['value'=>'2005-02-03','name'=>'french_entry_date','label'=>'Date d\'entré en France','required'=>'required','type'=>'date'])
@include('layouts.formcontrols.input',['value'=>'2007-02-03','name'=>'exit_date','label'=>'Date de sortie','type'=>'date'])


<div class="mb-3 text-center">
    <button type="submit" class="btn btn-primary">Créer adhérent</button>
</div>
</form>

</div>
</div>
</div>
@endsection
