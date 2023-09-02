

@extends('dashboard.layouts.layout')
@section('main-content')


    <?php
        use App\Models\User;
    ?>

    <div class="container">
        <fieldset>
        <form method="POST" action="{{ route('user.update', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" name="family_name" value="{{ $user->family_name }}" required>
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" required>
            </div>
            <div class="form-group">
                <label for="gender_id">Sexe</label>
                <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                        <input class="form-check-input" type="radio" name="gender_id" id="femaleGender" value="2" {{ $user->gender_id == 2 ? 'checked' : '' }}>
                        <label class="form-check-label" for="femaleGender">Femme</label>
                    </div>
                    <div class="form-outline flex-fill mb-0">
                        <input class="form-check-input" type="radio" name="gender_id" id="maleGender" value="1" {{ $user->gender_id == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="maleGender">Homme</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="dob">Date de naissance</label>
                <input type="date" class="form-control" name="dob" value="{{ $user->dob }}" min="1900-01-01" max="2023-12-31" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
            </div>
            <!-- Other input fields for email, address, tel, and password -->
            <div class="form-group">
                <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
            </div>
        </form>
        </fieldset>
    </div>

    <div class="container">
        <fieldset>
        <form action="{{route('adherent.update',$adherent->id)}}" method="POST">
            @csrf
            @method('PUT')
            @include('layouts.formcontrols.select',['name'=>'city_id','label'=>'Adresse (Ville - CP)','required'=>'required','data_array'=>$cities,'selected_id'=>$adherent->city_id])

            @include('layouts.formcontrols.select',['value'=>'1','name'=>'education_level_id','label'=>'Education','required'=>'required','data_array'=>$education_levels,'selected_id'=>$adherent->education_level_id])

            <div class="form-group d-none">
                <label>User id</label>
                <input type="text" class="form-control" name="user_id" value="{{ $user->id }}" >
            </div>


            <?php
                //dd($adherent->QPV);
            ?>

            <div class="checkbox-container">
                <input type="checkbox" id="CIR" name="CIR" class="" {{$adherent->CIR===1? "checked":""}}>
                <label for="CIR" class="mr-5">CIR</label>
                <input type="checkbox" id="QPV" name="QPV" {{$adherent->QPV===1? "checked":""}}>
                <label for="QPV">QPV</label>

                <!--<span class="checkmark"></span>-->
            </div>
            @include('layouts.formcontrols.select',['value'=>'2','name'=>'marital_status_id','label'=>'Situation familiale','required'=>'required','data_array'=>$marital_statuses,'selected_id'=>$adherent->marital_status_id])
            @include('layouts.formcontrols.select',['value'=>'3','name'=>'income_type_id','label'=>'Revenu','required'=>'required','data_array'=>$income_types,'selected_id'=>$adherent->income_type_id])
            @include('layouts.formcontrols.select',['name'=>'place_of_birth','label'=>'Lieu de naissance','required'=>'required','data_array'=>$countries,'selected_id'=>$adherent->place_of_birth])
            @include('layouts.formcontrols.select',['name'=>'citizenship','label'=>'Nationalité','required'=>'required','data_array'=>$countries,'selected_id'=>$adherent->citizenship])
            @include('layouts.formcontrols.select',['value'=>'2','name'=>'legal_situation_id','label'=>'Situation administrative','required'=>'required','data_array'=>$legal_situations,'selected_id'=>$adherent->legal_situation_id])
            @include('layouts.formcontrols.input',['value'=>'2000-02-03','name'=>'registration_date','label'=>'Date d\'adhésion','required'=>'required','type'=>'date','selected_data'=>$adherent->registration_date])
            @include('layouts.formcontrols.input',['value'=>'2005-02-03','name'=>'french_entry_date','label'=>'Date d\'entré en France','required'=>'required','type'=>'date','selected_data'=>$adherent->french_entry_date])
            @include('layouts.formcontrols.input',['value'=>'2007-02-03','name'=>'exit_date','label'=>'Date de sortie','type'=>'date','selected_data'=>$adherent->exit_date])

            <div class="form-group">
                <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
            </div>
        </form>
        </fieldset>
    </div>
@endsection
