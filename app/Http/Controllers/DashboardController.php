<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use App\Models\Kid;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function randomDate()
    {
        $timestamp = rand( strtotime("Jan 01 2020"), strtotime("May 01 2023") );
        $random_Date = date("d.m.Y", $timestamp );
        return $random_Date;
    }
    public function indextest()
    {

        //$adherents = DB::table('adherents')->get();
        ///TODO To create a select list that help us to sort either by name, inscription date, ...
        //$adherents=Adherent::('family_name')->get();

        $adherents=Adherent::all();
        $users=User::all();
        return view('dashboard.index',['adherents'=>$adherents,'users'=>$users]);
    }
    public function index(Request $request){
        $perPage = $request->session()->get('perpage', 10);
        return view('dashboard.index',[
            'adherents'=>Adherent::orderBy('created_at', 'desc')->paginate($perPage,['*'],'adherents'),
            'users'=>User::orderBy('created_at', 'desc')->paginate($perPage,['*'],'users'),
            'data'=>['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()],
            'kids'=>Kid::orderBy('created_at', 'desc')->paginate($perPage,['*'],'kids'),
            'staffs'=>Staff::orderBy('created_at', 'desc')->paginate($perPage,['*'],'staffs')
        ]);
    }
    public function deleteAdherent($id){
        $adherent= Adherent::find($id);
        $adherent->delete();

        return redirect('/dashboard/');
    }
    public function priviledges(){
        return view('dashboard.priviledges');
    }
    public function test(){
        return view('dashboard.layouts.test');
    }
    public function userRoleEdit($id)
    {
        return view('dashboard.staff.edit', ['staff'=>Staff::findOrFail($id)]);
    }
    public function userRoleUpdate(Request $request,$id){
        $user = Staff::find($id);
        $user->is_editor = $request->has('is_editor');
        $user->is_admin=$request->has('is_admin');
        $user->is_dev=$request->has('is_dev');
        $user->is_teacher=$request->has('is_teacher');
        $user->is_animator=$request->has('is_animator');
        $user->is_intern=$request->has('is_intern');
        $user->is_civic_volunteer=$request->has('is_civic_volunteer');
        //dd($user->is_civic_volunteer);
        // Save the updated user
        $user->save();
        return redirect('/dashboard');
    }
    function staffsite(){
        return view('admin.staffsite.index');
    }
    function bugReport(){
        return view('admin.staffsite.bug-report-form');
    }
}
