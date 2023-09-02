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
    <div class="d-none">
        <?php
        use App\Models\Staff;
        $connected_user_id=auth()->user()->id;
        $connected_staff_member = Staff::where('user_id', $connected_user_id)->first();

        ?>
    </div>
    <div class="main-content">

            <form method="POST" action="{{route('userrole.update',$staff->id)}}">
                @csrf
                @method('PUT')
                <div class="card" role="document">

                    <div class="card">
                        <div class="card-header">
                            <h5>Changer les role de {{$staff->first_name}}  {{$staff->family_name}}</h5>
                        </div>
                        <div class="card-body">

                            <div class="form-switch">
                                <input class="form-check-input " type="checkbox" id="is_editor" name="is_editor" {{$staff->is_editor?"checked":""}} @if(!$connected_staff_member->is_editor || !$connected_staff_member->is_admin || !$connected_staff_member->is_dev ) disabled @endif>
                                <label class="form-check-label" for="is_editor" >Role editeur </label>
                            </div>
                            <div class="form-switch ">
                                <input class="form-check-input " type="checkbox" id="is_teacher" name="is_teacher"  {{$staff->is_teacher?"checked":""}} @if(!$connected_staff_member->is_teacher || !$connected_staff_member->is_admin || !$connected_staff_member->is_dev)  disabled @endif >
                                <label class="form-check-label" for="is_teacher">Role formateur</label>
                            </div>
                            <div class="form-switch ">
                                <input class="form-check-input " type="checkbox" id="is_admin" name="is_admin"  {{$staff->is_admin?"checked":""}} @if(!$connected_staff_member->is_admin  || !$connected_staff_member->is_dev) disabled @endif>
                                <label class="form-check-label" for="is_admin">Role administrateur</label>
                            </div>
                            <div class="form-switch">
                                <input class="form-check-input " type="checkbox" id="is_dev" name="is_intern"  {{$staff->is_intern?"checked":""}} @if(!$connected_staff_member->is_intern || !$connected_staff_member->is_admin || !$connected_staff_member->is_dev) disabled @endif>
                                <label class="form-check-label" for="is_intern">Role stagiaire</label>
                            </div>
                            <div class="form-switch">
                                <input class="form-check-input " type="checkbox" id="is_dev" name="is_animator"  {{$staff->is_animator?"checked":""}} @if(!$connected_staff_member->is_animator || !$connected_staff_member->is_admin || !$connected_staff_member->is_dev) disabled @endif>
                                <label class="form-check-label" for="is_animator">Role animatrice</label>
                            </div>
                            <div class="form-switch">
                                <input class="form-check-input" type="checkbox" id="is_dev" name="is_dev"  {{$staff->is_dev?"checked":""}}  @if(!$connected_staff_member->is_dev ) disabled @endif>
                                <label class="form-check-label" for="is_dev">Role développeur</label>
                            </div>
                            <div class="form-switch">
                                <input class="form-check-input" type="checkbox" id="is_civic_volunteer" name="is_civic_volunteer"  {{$staff->is_civic_volunteer?"checked":""}}  @if(!$connected_staff_member->is_admin || !$connected_staff_member->is_dev) disabled @endif>
                                <label class="form-check-label" for="is_dev">Role service civique</label>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Valider</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection
