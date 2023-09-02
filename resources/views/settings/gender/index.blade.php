@extends('layouts.layout')


@section('quick_links')
    <div class="overview">
        @include('layouts.heading.content_title',['icon'=>'uil uil-tachometer-fast-alt','label'=>'Liens rapide'])

        <div class="boxes">
            @include('layouts.heading.box',['box_number'=>'1','icon'=>'uil uil-user','label'=>count($genders).' '.'Civilités','data'=>''])
            @include('layouts.heading.box',['box_number'=>'2','icon'=>'uil uil-user-plus','label'=>'Aller au paramètre','data'=>'','url'=>route('adherent.index')])
            @include('layouts.heading.box',['box_number'=>'3','icon'=>'uil uil-external-link-alt','label'=>'Autre actions','data'=>''])
        </div>
    </div>
@endsection

@section('content')
    <div class="activity">
        @include('layouts.heading.content_title',['icon'=>'uil uil-user','label'=>'Liste des groupes'])

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Label
                    <button><i class="uil uil-sort"></i></button>
                </th>
                <th>Modifier</th>
                <th>Supprimer</th>

            </tr>
            </thead>

            @foreach($genders as $x)
                <tr>
                    <td> {{$x->index +1}}</td>
                    <td> {{$x->id}}</td>
                    <td> {{$x->label}}</td>
                    <td>
                        <button class="delete table-btn"><span class="material-symbols-outlined">delete</span></button>
                    </td>
                    <td>
                        <button class="edit table-btn"><span class="material-symbols-outlined">edit</span></button>
                    </td>

                </tr>
            @endforeach
        </table>


        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

@endsection
