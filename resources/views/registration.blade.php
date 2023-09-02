@extends('layout')
@section('title', 'Registration')
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
        <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-auto"
              style="width: 500px">
            @csrf
            <div class="mb-3">
                <label class="form-label">nom de famille</label>
                <input type="text" class="form-control" name="family_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="dob">
            </div>
            <h6 class=" d-flex flex-row align-items-center mb-2 pb-1">Civilité: </h6>
            <div class="d-flex flex-row align-items-center mb-4">

                <div class="form-outline flex-fill mb-0">
                    <input class="form-check-input" type="radio" name="gender_id" id="femaleGender" value="2" checked />
                    <label class="form-check-label" for="femaleGender">Femme</label>
                </div>
                <div class="form-outline flex-fill mb-0">
                    <input class="form-check-input" type="radio" name="gender_id" id="maleGender" value="1" />
                    <label class="form-check-label" for="maleGender">Homme</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
 {{--<section class="vh-100" style="background-color: #eee;">
     <div class="container h-100">
         <div class="row d-flex justify-content-center align-items-center h-100">
             <div class="col-lg-12 col-xl-11">
                 <div class="card text-black" style="border-radius: 25px;">
                     <div class="card-body p-md-5">
                         <div class="row justify-content-center">
                             <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                 <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Créer un compte</p>

                                 <form class="mx-1 mx-md-4"  action="{{ route('registration.post') }}" method="post">
                                     @if(Session::get('success'))
                                         <div class="alert alert-success">
                                             {{ Session::get('success') }}
                                         </div>
                                     @endif

                                     @if(Session::get('fail'))
                                         <div class="alert alert-danger">
                                             {{ Session::get('fail') }}
                                         </div>
                                     @endif


                                     @csrf
                                     <div class="d-flex flex-row align-items-center mb-4">
                                         <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                         <div class="form-outline flex-fill mb-0">

                                             <label class="form-label">Nom</label>
                                             <input type="text" class="form-control" name="family_name" placeholder="Saisissez votre nom de famille" value="{{ old('family_name') }}" required/>
                                             <span class="text-danger">@error('family_name'){{ $message }} @enderror</span>


                                         </div>
                                     </div>
                                     <div class="d-flex flex-row align-items-center mb-4">
                                         <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                         <div class="form-outline flex-fill mb-0">
                                             <label class="form-label" for="first_name">Prénom</label>
                                             <input type="text" id="first_name" class="form-control" name="first_name" placeholder="Saisissez votre prénom" value="{{old('first_name')}}" required/>
                                             <span class="text-danger">@error('surname'){{ $message }}@enderror</span>
                                         </div>
                                     </div>




                                     <h6 class=" d-flex flex-row align-items-center mb-2 pb-1">Civilité: </h6>
                                     <div class="d-flex flex-row align-items-center mb-4">

                                         <div class="form-outline flex-fill mb-0">
                                             <input class="form-check-input" type="radio" name="gender_id" id="femaleGender" value="2" checked />
                                             <label class="form-check-label" for="femaleGender">Femme</label>
                                         </div>
                                         <div class="form-outline flex-fill mb-0">
                                             <input class="form-check-input" type="radio" name="gender_id" id="maleGender" value="1" />
                                             <label class="form-check-label" for="maleGender">Homme</label>
                                         </div>
                                     </div>



                                     <div class="d-flex flex-row align-items-center mb-4">
                                         <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                         <div class="form-outline flex-fill mb-0">
                                             <label class="form-label" for="dob">Date de naissance</label>
                                             <input type="date" id="dob" class="form-control" name="dob" placeholder="Saisissez votre date de naissance" value="{{old('dob')}}" required/>
                                             <span class="text-danger">@error('dob'){{ $message }}@enderror</span>
                                         </div>
                                     </div>



                                     <div class="d-flex flex-row align-items-center mb-4">
                                         <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                         <div class="form-outline flex-fill mb-0">
                                             <label class="form-label" for="email">Email</label>
                                             <input type="email" id="email" class="form-control" name="email" placeholder="Saisissez votre email" value="{{old('email')}}" required />
                                             <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                         </div>
                                     </div>

                                     <div class="d-flex flex-row align-items-center mb-4">
                                         <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                         <div class="form-outline flex-fill mb-0">
                                             <label class="form-label" for="password">Mot de passe</label>
                                             <input type="password" id="password" class="form-control" name="password" placeholder=" Votre mot de passe"required/>
                                             <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                         </div>
                                     </div>

                                     <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                         <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                     </div>
                                     <p>Vous avez déjà un compte? <a href="{{route('login')}}">connectez vous</a></p>

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
 </section>--}}
@endsection
