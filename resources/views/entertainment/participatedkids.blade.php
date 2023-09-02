<?php
use App\Models\Adherent;
use App\Models\Entertainment;
use App\Models\EntertainmentDescription;
use App\Models\Kid;
use App\Models\KidEntertainment;
use App\Models\User;
?>

@extends('dashboard.layouts.layout')
@section('main-content')
    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="table-wrapper">

                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">Les enfants qui ont participé dans L'atelier {{$entertainment->label}} du {{$entertainment->day}}</h2>
                            </div>
                            <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                                <a href="{{route('kid.create')}}" class="btn btn-success" data-toggle="">
                                    <i class="material-icons">&#xE147;</i>
                                    <span>Ajouter</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th><span class="custom-checkbox">
							 <input type="checkbox" id="selectAll">
                                        <label for="selectAll"></label></span>
                            </th>
                            <th>Nom prénom</th>
                            <th>Email</th>
                            <th>Addresse</th>
                            <th>Tel parent</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($pKids))
                            @foreach($pKids as $kid)
                                <div class="d-none">{{$parent=User::all()->find($kid->parent_id)}}</div>
                                <button class="d-none delete_adherent_id" value="{{$kid->id}}">zkhjbflzh</button>

                                {{--dd($parent)--}}

                                <tr title="Le nom du parent est {{$parent->family_name}} {{$parent->first_name}} ">
                                    <td><span class="custom-checkbox"></span>
                                        <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                        <label for="checkbox1"></label></td>

                                    <td>{{$kid->family_name}} {{$kid->first_name}}</td>
                                    <td>{{$parent->email}}</td>
                                    <td>{{$parent->address}}</td>
                                    <td>{{$parent->tel}}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('kid.show', $kid->id) }}" type="button" class="btn btn-secondary"><span class="material-symbols-outlined text-white">visibility</span></a>
                                            <a href="{{ route('kid.edit', $kid->id)}}" type="button" class="btn btn-warning"><i class="material-icons" data-toggle="tooltip" title="Modifier">&#xE254;</i></a>
                                            <form action="{{ route('kid.destroy', $kid->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Etes vous sur de vouloir supprimer cet enfant?')">
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
                        <div class="clearfix">
                            {{-- $kids->links('vendor.pagination.custom')--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
