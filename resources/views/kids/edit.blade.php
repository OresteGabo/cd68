@extends('dashboard.layouts.layout')
@section('main-content')
    <?php
    use App\Models\EntertainmentDescription;
    use App\Models\Entertainment;
    ?>

    <!-- resources/views/kids/edit.blade.php -->

        <form class="m-4 card" action="{{ route('kid.update', $kid->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Add form fields here based on your table structure -->
            <div class="card-header">
                <h5>Mettre a jours les données de {{$kid->first_name}}  {{$kid->family_name}}</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="family_name">Nom de famille</label>
                    <input type="text" name="family_name" id="family_name" value="{{ $kid->family_name }}" required>
                </div>

                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input type="text" name="first_name" id="first_name" value="{{ $kid->first_name }}" required>
                </div>

                <div class="form-group">
                    <label for="dob">Date de naissance</label>
                    <input type="date" name="dob" id="dob" value="{{ $kid->dob }}" required>
                </div>

                <!-- Add more fields here -->

                <div  class="form-group">
                    <select name="parent_id" id="parent_id" class="form-select">
                        <label for="parent_id">Vous vous êtes trompé de parent? selectionner à nouveau</label>

                        <div class="d-none">
                            {{$parent=$parents->find($kid->parent_id)}}
                        </div>


                        <option value="{{$kid->parent_id}}" >Parent actuel: {{ $kid->parent_id }} {{$parent->family_name}}{{$parent->first_name}}</option>
                        @foreach ($parents as $parent)
                            @if($parent->id!=$kid->parent_id)
                                <option value="{{$parent->id}}" >{{ $parent->id }} : {{ $parent->family_name }} {{$parent->first_name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="card-header">
                <button type="submit" class="btn btn-secondary">Mettre à jour</button>
            </div>

        </form>






@endsection
