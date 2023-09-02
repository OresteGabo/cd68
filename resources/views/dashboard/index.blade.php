@extends('dashboard.layouts.layout')
@section('main-content')
        <div class="main-content">
            @include('dashboard.layouts.adherents')
            @include('dashboard.layouts.users')
            @include('dashboard.layouts.kids')
            @include('dashboard.layouts.staffs')
        </div>
@endsection
