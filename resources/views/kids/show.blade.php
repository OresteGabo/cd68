@extends('dashboard.layouts.layout')
@section('main-content')
    <?php
    use App\Models\EntertainmentDescription;
    use App\Models\Entertainment;
    ?>
    <div class="container">
        <!-- Display kid's data -->
        <div class="row mb-4">
            <div class="col">
                <h1>{{ $kid->first_name }} {{ $kid->family_name }}</h1>
                <h4>Date de naissance: <span class="text-muted">Le {{strftime("%d/%m/%Y", strtotime( $kid->dob ))}}</span></h4>
                <h4>Parent: <span class="text-muted">{{ $parent->first_name }} {{ $parent->family_name }}</span></h4>
            </div>
        </div>

        <!-- Display related kidsentertainment where that kid participated in -->
        <div class="row">
            <div class="col">
                <h2>Les Ateliers</h2>

                        @foreach ($kid_kidsentertainments as $kid_kidsentertainment)
                            {{--$kid_kidsentertainment->entertainment_id--}}
                            <div class="d-none">
                                {{$kidEntertainmentDescriptions=EntertainmentDescription::where('entertainment_id', $kid_kidsentertainment->entertainment_id)->get()}}
                            </div>
                            <div class="accordion" id="kidEntertainmentDescriptionAccordion">
                                <div class="d-none">{{$currentEntertainment=(Entertainment::where('id',$kid_kidsentertainment->entertainment_id)->get())[0]}}</div>
                                {{--@foreach($kidEntertainmentDescriptions as $kidEntertainmentDescription)--}}
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="kidEntertainmentDescriptionHeading{{$loop->index}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#kidEntertainmentDescriptionCollapse{{$loop->index}}" aria-expanded="true" aria-controls="kidEntertainmentDescriptionCollapse{{$loop->index}}">
                                            Le {{strftime("%d/%m/%Y", strtotime( $currentEntertainment->day ))}}    -   {{$currentEntertainment->location}}
                                        </button>
                                    </h2>

                                    <div id="kidEntertainmentDescriptionCollapse{{$loop->index}}" class="accordion-collapse collapse {{$loop->index==0?'show':''}}" aria-labelledby="$kidEntertainmentDescriptionHeading{{$loop->index}}" data-bs-parent="#kidEntertainmentDescriptionAccordion">
                                        <div class="accordion-body">
                                            <strong>{{$currentEntertainment->label}}</strong>
                                            <ul class="list-group">
                                                @foreach($kidEntertainmentDescriptions as $kidEntertainmentDescription)
                                                    <li class="list-group-item">{{$kidEntertainmentDescription->label}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
            </div>
        </div>


        <div class="row mb-4 mt-5">
            <div class="col">
                <h2>Ajouter {{ $kid->first_name }} {{ $kid->family_name }} à un Atelier</h2>
                <form action="{{ route('kid_entertainment.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="kid_id" value="{{ $kid->id }}">
                    <div class="mb-3">
                        <input type="text" name="kid_id" class="d-none" id="kid_id" value="{{$kid->id}}" placeholder="{{$kid->id}}">
                        <label for="entertainment_id" class="form-label">Choisir un atelier:</label>
                        <select class="form-select" name="entertainment_id" id="entertainment_id" required>
                            @foreach ($unassociatedEntertainmentsOfAGivenKid as $ueoak)
                                <option value="{{ $ueoak->id }}">{{ $ueoak->label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter à l'atelier</button>
                </form>
            </div>
        </div>

    </div>



@endsection
