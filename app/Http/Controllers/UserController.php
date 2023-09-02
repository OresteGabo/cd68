<?php

namespace App\Http\Controllers;

use App\Models\AgeGap;
use App\Models\City;
use App\Models\Country;
use App\Models\EducationLevel;
use App\Models\Gender;
use App\Models\IncomeType;
use App\Models\LegalSituation;
use App\Models\MaritalStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate requests
        $request->validate([
            'family_name'=>'required',
            'first_name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:7|max:25'
        ]);

        //Insert data into database
        $user = new User;
        $family_name=$user->family_name = $request->family_name;
        $first_name=$user->first_name=$request->first_name;
        $email=$user->email = $request->email;
        $tel=$user->tel=$request->tel;
        $address=$user->address=$request->address;
        $password=$request->password;
        $user->password = Hash::make($password);
        $gender_id=$user->gender_id=$request->gender_id;
        $dob=$user->dob=$request->dob;//'2000-01-01';

        /*if($user = User::where('email','=',$email)->exists()){
            return back()->with('fail','Email exist in the database');
        }*/



        $save = $user->save();

        if($save){

            /*
             * Sending an email to the user with the password   $pass
             * */
            $createduser=DB::table('users')->where('email', $email)->first();
            $to = $user->email;

            return redirect('adherent/create')->with([
                'success'=>'L\'utilisateur à été ajouté, il ne reste qu\'a ajouter les données nécéssaires pour un adhérent',
                'usercreated'=>'yes',
                'createduser'=>$createduser,
            ]);



            /*$subject = "Message pour l'enregistrement";

            $message = "<b>Vous avez creer un compte cdafal.</b>";
            $message .= "<h1>Si vous n'etes pas a l\'origine de cette operation, veuillez nous contacter sur cdafal68@hotmail.com pour qu'on puisse corriger l\'erreur</h1>";

            $header = "From:cdafal68@hotmail.com \r\n";
            $header .= "Cc:muhirwa.g.oreste@gmail.com \r\n";
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            $retval = mail ($to,$subject,$message,$header);

            if( $retval == true ) {

                //echo "Message sent successfully...";
                //return back()->with('success','New User has been successfuly added to database  email sent successfully...');
                return redirect('adherent/create')->with([
                    'email' => $email,
                    'success'=>'L\'utilisateur à été ajouté, il ne reste qu\'a ajouter les données nécéssaires pour un adhérent',
                    'usercreated'=>'yes' ,
                    'family_name'=>$family_name,
                    'first_name'=>$first_name,
                    'dob'=>$dob,
                    'gender_id'=>$gender_id,
                    'createduser'=>$createduser,
                    'tel'=>$tel,
                    'address'=>$address
                    ]);
                //return redirect()->route('adherent.create')->with([ 'useremail' => $useremail,'success'=>'L\'utilisateur à été ajouté, il ne reste qu\'a ajouter les données nécéssaires pour un adhérent','userexist'=>'yes' ]);
            }else {
                //dd(redirect('adherent/create'));
                //echo "Message could not be sent...";


                //$user_id=User::where('email',$email)->select('id')->get();

            }




            //return back()->with('success','New User has been successfuly added to database '.$retval? ' email sent successfully...':'email could not be sent...');
        */
        }else{

            $user_id=User::select('id')->where('email', $email)->first();
            dd($user_id);

            return redirect('adherent/create')->with([
                'useremail' => $email,'success'=>'L\'utilisateur à été ajouté, il ne reste qu\'a ajouter les données nécéssaires pour un adhérent',
                'usercreated'=>'yes',
                'email' => $email,
                'family_name'=>$family_name,
                'first_name'=>$first_name,
                'dob'=>$dob,
                'gender_id'=>$gender_id,
                'createduser'=>$createduser,
                'tel'=>$tel,
                'address'=>$address,
                'user_id'=>$user_id
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $genders=Gender::all();
        $user=User::findOrFail($id);

        return view('adherent.edit',[
            'user'=>$user,
            'genders'=>$genders
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user=User::findOrFail($id);

        $user->address=$request->input('address')??$user->address;
        $user->dob=$request->input('dob')??$user->dob;
        $user->email=$request->input('email')??$user->email;
        $user->family_name=$request->input('family_name')??$user->family_name;
        $user->first_name=$request->input('first_name')??$user->first_name;
        $user->is_staff_valid=$request->input('is_staff_valid')??$user->is_staff_valid;
        $user->tel=$request->input('tel')??$user->tel;
        $user->is_user=$request->input('is_user')?? $user->is_user;

        /*$adherent->citizenship=$request->input('citizenship');
        $adherent->education_level_id=$request->input('education_level_id');
        $adherent->exit_date=$request->input('exit_date');
        $adherent->french_entry_date=$request->input('french_entry_date');
        $adherent->income_type_id=$request->input('income_type_id');
        $adherent->legal_situation_id=$request->input('legal_situation_id');
        $adherent->marital_status_id=$request->input('marital_status_id');
        $adherent->place_of_birth=$request->input('place_of_birth');
        $adherent->city_id=$request->input('city_id');
        $adherent->QPV=False;
        $adherent->registration_date=$request->input('registration_date');
        $adherent->user_id=$request->input('user_id');*/

        $user->save();
        return redirect(route('staffsite.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=User::findOrFail($id);
        $data->delete();
        return redirect('/dashboard/');
    }
}
