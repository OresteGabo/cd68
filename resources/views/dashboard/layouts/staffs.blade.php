<?php
use App\Models\User;
use App\Models\Staff;
?>
<div class="d-none">
    <?php
    $connected_user_id=auth()->user()->id;
    $connected_staff_member = Staff::where('user_id', $connected_user_id)->first();
    ?>
</div>
@if($connected_staff_member!=null && ($connected_staff_member->is_admin || $connected_staff_member->is_dev || $connected_staff_member->is_teacher || $connected_staff_member->is_editor))
    <div class="row">
        <div class="col-md-12">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                            <h2 class="ml-lg-2">Gestion des roles du personnel CDAFAL68</h2>
                        </div>
                        <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                            <a href="#" id="editAdminBtn" class="btn btn-success" data-toggle="modal" data-target="#editRoleModal">
                                <i class="material-icons">&#xE147;</i>
                                <span>Modifier</span>
                            </a>
                            <a href="#helpModal" class="btn btn-danger" data-toggle="modal">
                                <i class="material-icons">&#xE15C;</i>
                                <span>Aide</span>
                            </a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#helpModal">
                                aide
                            </button>
                        </div>
                    </div>
                </div>



                <table class="table table-striped table-hover" id="adminsTable">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Nom prénom</th>
                        <th>Email</th>
                        <th>Editeur</th>
                        <th>Formateur</th>
                        <th>Admin</th>
                        <th>Stagiaire</th>
                        <th>Animateur</th>
                        <th>S.Civique</th>
                        <th>Dev</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($staffs))
                        @foreach($staffs as $staff)
                            <div class="d-none">{{$user=User::all()->find($staff->user_id)}}</div>
                            <tr>
                                <td></td>
                                <td>{{$user->family_name}} {{$user->first_name}}</td>
                                <td>{{$user->email}} email</td>
                                <td><h6 class="mb-0"><span class="badge {{$staff->is_editor?"text-success":"text-danger"}} "><span class="material-symbols-outlined">{{$staff->is_editor?"done":"close"}}</span></span></h6></td>
                                <td><h6 class="mb-0"><span class="badge {{$staff->is_teacher?"text-success":"text-danger"}} "><span class="material-symbols-outlined">{{$staff->is_teacher?"done":"close"}}</span></span></h6></td>
                                <td><h6 class="mb-0"><span class="badge {{$staff->is_admin?"text-success":"text-danger"}} "><span class="material-symbols-outlined">{{$staff->is_admin?"done":"close"}}</span></span></h6></td>
                                <td><h6 class="mb-0"><span class="badge {{$staff->is_intern?"text-success":"text-danger"}} "><span class="material-symbols-outlined">{{$staff->is_intern?"done":"close"}}</span></span></h6></td>
                                <td><h6 class="mb-0"><span class="badge {{$staff->is_animator?"text-success":"text-danger"}} "><span class="material-symbols-outlined">{{$staff->is_animator?"done":"close"}}</span></span></h6></td>
                                <td><h6 class="mb-0"><span class="badge {{$staff->is_civic_volunteer?"text-success":"text-danger"}} "><span class="material-symbols-outlined">{{$staff->is_civic_volunteer?"done":"close"}}</span></span></h6></td>
                                <td><h6 class="mb-0"><span class="badge {{$staff->is_dev?"text-success":"text-danger"}} "><span class="material-symbols-outlined">{{$staff->is_dev?"done":"close"}}</span></span></h6></td>

                                <td class="align-middle">
                                    <a
                                        href="{{ route('userrole.edit', $staff->id) }}"
                                        type="button"
                                        id="editAdminBtn"
                                        class="btn btn-secondary text-white @if($user_id=auth()->user()->id == $staff->user_id ) disabled @endif"
                                        title="Modifier les roles de {{$staff->family_name}} {{$staff->first_name}}"><span class="material-symbols-outlined">edit</span>
                                    </a>
                                </td>

                            </tr>

                            {{--@endif--}}
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <div class="clearfix">
                    {{ $staffs->appends(['users'=>$users->currentPage(),'adherents'=>$adherents->currentPage(),'kids'=>$kids->currentPage()])->links('vendor.pagination.custom')}}
                </div>
            </div>
        </div>
    </div>
@endif
