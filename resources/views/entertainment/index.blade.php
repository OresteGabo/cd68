@extends('dashboard.layouts.layout')
@section('main-content')
    <?php
    use App\Models\User;
    use App\Models\Adherent;
    use App\Models\Entertainment;
    ?>


    <div class="m-5 ">
        <div class="row">
            <div class="">
                <h2>Les Ateliers pour les enfants</h2>

                <!-- Accordéon -->
                <div id="accordionPaiements">
                    <div class="card">


                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                    <h2 class="ml-lg-2">Gestion des ateliers</h2>

                                </div>
                                <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center"  >
                                    <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Voir/cacher les atéliers
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionPaiements">
                            <div class="card-body">
                                <!-- Tableau pour afficher les paiements -->
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Lieu</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($entertainments as $entertainment)
                                        <div class="d-none">
                                            {{--$payment_method=$paymentMethods->find($payment->payment_methods_id)}}
                                            {{$term=$terms->find($payment->terms_id)}}
                                            {{$year=$years->find($term->year_id)--}}
                                            <?php
                                                $dateString = $entertainment->day;
                                                $dateTime = new DateTime($dateString);

// Month translations
                                                $monthTranslations = [
                                                    1 => 'janvier', 2 => 'février', 3 => 'mars', 4 => 'avril',
                                                    5 => 'mai', 6 => 'juin', 7 => 'juillet', 8 => 'août',
                                                    9 => 'septembre', 10 => 'octobre', 11 => 'novembre', 12 => 'décembre',
                                                ];

                                                $day = $dateTime->format('d');
                                                $month = $monthTranslations[(int)$dateTime->format('n')];
                                                $year = $dateTime->format('Y');

                                                $formattedDate = "Le {$day} {$month} {$year}";

                                                echo $formattedDate;
                                                ?>

                                        </div>
                                        {{--@if($payment->adherents_id === $adherent->id)--}}
                                            <tr>
                                                <th>{{$loop->index+1}}</th>
                                                <td>{{$entertainment->label}}</td>
                                                <td>{{$entertainment->location}}</td>
                                                <td>{{$formattedDate}}</td>
                                                <td class="align-middle">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <a href="{{ route('kid_entertainment.show', $entertainment->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                                        <a href="{{ route('entertainment.participatedKids', $entertainment->id)}}" type="button" class="btn btn-outline-success"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE7FD;</i>
                                                        </a>
                                                        <a href="{{ route('kid_entertainment.edit', $entertainment->id)}}" type="button" class="btn btn-warning"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
                                                        <form action="{{ route('kid_entertainment.destroy', $entertainment->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Etes vous sur de vouloir supprimer cet enregistrement?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger m-0"><i class="material-icons" data-toggle="tooltip" title="Supprimer">&#xE872;</i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                        {{--@endif--}}
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="clearfix">
                                    {{ $entertainments->links('vendor.pagination.custom') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulaire de Paiement -->
                <h2>Saisir le nouveau atelier pour les enfants</h2>
                <form method="POST" action="{{route('entertainment.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="label" name="label" required>
                    </div>
                    <div class="form-group ">
                        <label for="location">Lieu</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder=""  value=""required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control" id="day" name="day" value="{{ now()->toDateString() }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter une activité</button>
                </form>
            </div>
        </div>
    </div>






@endsection
