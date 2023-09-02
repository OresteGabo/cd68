@extends('layout')
@section('title', "Home Page")
@section('content')
this is the content
    <h1>Ids</h1>
@auth

    @if(auth()->user()->is_user == true)
        <p>This is a user content</p>
    @endif
    @if(auth()->user()->is_admin == true)
        <p>This is an admin content</p>
    @endif

@endauth
@endsection
