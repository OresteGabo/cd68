{{--@extends('dashboard.layouts.layout')
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit User</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('userrole.update', $user->id) }}">
                            @csrf
                            @method('PUT')


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection--}}


@extends('dashboard.layouts.layout')
@section('main-content')
    <div class="main-content">

            {{--<form method="POST" action="{{route('userrole.update',$user->id)}}">
               @csrf
                @method('PUT')
                <div class="card" role="document">
                    <div class="card">
                        <div class="card-header">
                            <h5>Changer les role de {{$user->first_name}}  {{$user->family_name}}</h5>
                        </div>
                        <div class="card-body">

                            <div class="form-switch">
                                <input class="form-check-input" type="checkbox" id="is_user"  name="is_user" {{$user->is_user?"checked":""}}>
                                <label class="form-check-label" for="is_user">Role utilisateur</label>
                            </div>
                            <div class="form-switch">
                                <input class="form-check-input" type="checkbox" id="is_editor" name="is_editor" {{$user->is_editor?"checked":""}}>
                                <label class="form-check-label" for="is_editor" >Role editeur</label>
                            </div>
                            <div class="form-switch ">
                                <input class="form-check-input" type="checkbox" id="is_teacher" name="is_teacher"  {{$user->is_teacher?"checked":""}} >
                                <label class="form-check-label" for="is_teacher">Role formateur</label>
                            </div>
                            <div class="form-switch ">
                                <input class="form-check-input" type="checkbox" id="is_admin" name="is_admin"  {{$user->is_admin?"checked":""}}>
                                <label class="form-check-label" for="is_admin">Role administrateur</label>
                            </div>
                            <div class="form-switch">
                                <input class="form-check-input" type="checkbox" id="is_dev" name="is_dev"  {{$user->is_dev?"checked":""}}>
                                <label class="form-check-label" for="is_dev">Role développeur</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Valider</button>
                        </div>
                    </div>
                </div>
            </form>--}}
        </div>
@endsection
