<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{

    function login(){
        if (Auth::check()){
            return redirect(route('staffsite.index'));
        }
        return view('login');
    }

    function registration(){
        if (Auth::check()){
            return redirect(route('staffsite.index'));
        }
        return view('registration');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('staffsite.index'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'first_name' => 'required',
            'family_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['first_name'] = $request->first_name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['family_name'] = $request->family_name;
        $data['dob'] = $request->dob;
        $data['gender_id'] = $request->gender_id;
        $data['tel'] = $request->tel;
        $data['address']=$request->address;

        //$user = User::create($data);
        $user = new User;
        $user->family_name=$data['family_name'];
        $user->first_name=$data['first_name'];
        $user->email=$data['email'];
        $user->dob=$data['dob'];
        $user->gender_id=$data['gender_id'];
        $user->tel=$data['tel'];
        //dd($data['adress']);
        $user->address=$data['address']??'Pas d\'adresse';
        $user->tel=$data['tel']??'Pas de tel';
        $user->password=$data['password'];
        $save=$user->save();

        if(!$save){
            return redirect(route('registration'))->with("error", "Registration failed, try again.");
        }
        return redirect(route('login'))->with("success", "Registration success, Login to access the app");

    }


    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
