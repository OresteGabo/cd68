{{--@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
--}}
{{--

TODO I must create own validation messages in french https://laravel.com/docs/7.x/validation#custom-error-messages




--}}




    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
{{-- Beginning of the real code
<div class="container">
    <div class="row" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Login | Custom Auth</h4><hr>
            <form action="{{ route('auth.check') }}" method="post">
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Entrez votre adresse email" value="{{ old('email') }}">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Se connecter</button>
                <br>
                <a href="{{ route('auth.register') }}">Pas de compte? Créer un compte</a>
            </form>
        </div>
    </div>
</div>

End of the real code
--}}

<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Se connecter</p>

                                <form class="mx-1 mx-md-4" action="{{route('login.post')}}" method="POST">
                                    @if(Session::get('fail'))
                                        <div class="alert alert-danger">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif
                                    @csrf

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Entrez votre adresse email" value="{{ old('email') }}">
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="password">Mot de passe</label>
                                            <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                        </div>
                                    </div>


                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                        <label class="form-check-label" for="form2Example3">
                                            Gardez-moi connecté
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Se connecter</button>
                                    </div>

                                    <p>Mot de passe oublié?  <a href="#">Réinitialiser le mot de passe</a></p>

                                    <p>Pas de compte? <a href="{{route('registration')}}">Créer un compte</a></p>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                     class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
