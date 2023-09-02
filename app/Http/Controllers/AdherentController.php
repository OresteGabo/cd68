<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use App\Models\AgeGap;
use App\Models\City;
use App\Models\Country;
use App\Models\EducationLevel;
use App\Models\Gender;
use App\Models\IncomeType;
use App\Models\Payment;
use App\Models\PaymentMethod;
use App\Models\Term;
use App\Models\User;

use App\Models\LegalSituation;
use App\Models\MaritalStatus;
use App\Models\Year;
use DateTime;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AdherentController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index(Request $request)
    {
        $users = User::all();
        //dd($users);

        //$adherents = DB::table('adherents')->get();
        ///TODO To create a select list that help us to sort either by name, inscription date, ...
        //$adherents=Adherent::('family_name')->get();
        $perPage = $request->session()->get('perpage', 10);
        $adherents=Adherent::orderBy('created_at', 'desc')->paginate($perPage);
        //dd($adherents);
        return view('adherent.index',compact('adherents','users','perPage'));
    }


    public function updatePerPage(Request $request)
    {

        $perPage = $request->input('perPage', 10); // Default to 10 if not provided
        $adherents=Adherent::paginate($perPage);

        // Store the $perPage value in a session variable (optional)
        //$request->session()->put('perpage', $perpage);

        // Perform any other necessary actions with $perPage here
        // For example, you might use it to fetch data for pagination

        // Redirect back to the adherents.blade.php view
        return redirect()->route('adherent.index',compact('adherents','perPage'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(){

        //$income_types=DB::table('income_type')->get();
        $income_types=IncomeType::all();
        $genders=Gender::all();
        $education_levels=EducationLevel::all();
        $legal_situations=LegalSituation::all();
        $countries=Country::all();
        $marital_statuses= MaritalStatus::all();
        $cities= City::all();
        $users=User::all();


        return view('adherent.create',
            [
                'countries'=>$countries,
                'marital_statuses'=>$marital_statuses,
                'income_types'=>$income_types,
                'genders'=>$genders,
                'education_levels'=>$education_levels,
                'legal_situations'=>$legal_situations,
                'cities'=>$cities,
                'users'=>$users
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //
        $adherent =new Adherent();

        //$adherent->address=$request->input('address');

        $adherent->CIR=$request->input('CIR')===null ? false:true;
        $adherent->citizenship=$request->input('citizenship');
        $adherent->user_id=$request->input('user_id');
        //$adherent->dob=$request->input('dob');
        $adherent->education_level_id=$request->input('education_level_id');
        //$adherent->email=$request->input('email');
        $adherent->exit_date=$request->input('exit_date');
        //$adherent->family_name=$request->input('family_name');
        //$adherent->first_name=$request->input('first_name');
        $adherent->french_entry_date=$request->input('french_entry_date');
        //$adherent->gender_id=$request->input('gender_id');
        $adherent->income_type_id=$request->input('income_type_id');
        $adherent->legal_situation_id=$request->input('legal_situation_id');
        $adherent->marital_status_id=$request->input('marital_status_id');
        $adherent->place_of_birth=$request->input('place_of_birth');
        $adherent->city_id=$request->input('city_id');
        $adherent->QPV=$request->input('QPV')===null ? false:true;
        $adherent->registration_date=$request->input('registration_date');
        //$adherent->tel=$request->input('tel');
        $adherent->user_id=$request->input('user_id');
        //dd($adherent->QPV);

        $adherent->save();
        return redirect('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $adherent=Adherent::findOrFail($id);
        $user = User::findOrFail($adherent->user_id);
        ///TODO cotisations= Payment::findOrFail();
        $paymentMethods=PaymentMethod::all();
        $payments=Payment::all();
        $years=Year::all();
        $terms=Term::all();


        $countries=Country::all();
        //dd($adherent);

        //dd($age_gap);
        $city=City::findOrFail($adherent->city_id);
        $placeOfBirth = Country::findOrFail($adherent->place_of_birth);
        //dd($placeOfBirth);

        //To calcumate the age
        $now = new DateTime();
        $birthDate = new DateTime($user->dob);
        $age = $now->diff($birthDate)->y;

        //findOrFail(age_gap_id : (1,2,3))
        $age_gap=AgeGap::findOrFail(($age >= 18 && $age <= 25)? 1:(($age >= 26 && $age <= 64)?2:3));


        $citizenship = Country::findOrFail($adherent->citizenship);
        $legalSituation = LegalSituation::findOrFail($adherent->legal_situation_id);
        $maritalStatus = MaritalStatus::findOrFail($adherent->marital_status_id);
        $incomeType = IncomeType::findOrFail($adherent->income_type_id);
        $educationLevel = EducationLevel::findOrFail($adherent->education_level_id);
        //dd($paymentMethods);
        return view('adherent.show',[
            'age_gap'=>$age_gap,
                'adherent'=>$adherent,
                'countries'=>$countries,
                'place_of_birth'=>$placeOfBirth,
                'citizenship'=>$citizenship,
                'legal_situation'=>$legalSituation,
                'marital_status'=>$maritalStatus,
                'income_type'=>$incomeType,
                'education_level'=>$educationLevel,
                'city'=>$city,
                'age'=>$age,
                'user'=>$user,
                'paymentMethods'=>$paymentMethods,
                'terms'=>$terms,
                'years'=>$years,
                'payments'=>$payments
                ]
    );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit($id)
    {
        $adherent=Adherent::findOrFail($id);
        return view('adherent.edit',[
            'user'=>User::findOrFail($adherent->user_id),
            'adherent'=>$adherent,
            'countries'=>Country::all(),
            'marital_statuses'=>MaritalStatus::all(),
            'income_types'=>IncomeType::all(),
            'genders'=>Gender::all(),
            'education_levels'=>EducationLevel::all(),
            'legal_situations'=>LegalSituation::all(),
            'cities'=> City::all(),
        ]);
    }
    /**
     * others
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function other()
    {
        return view('adherent.others');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $adherent=Adherent::findOrFail($id);


        $adherent->CIR=$request->input('CIR')===null ? 0:1;

        $adherent->citizenship=$request->input('citizenship');
        $adherent->education_level_id=$request->input('education_level_id');
        $adherent->exit_date=$request->input('exit_date');
        $adherent->french_entry_date=$request->input('french_entry_date');
        $adherent->income_type_id=$request->input('income_type_id');
        $adherent->legal_situation_id=$request->input('legal_situation_id');
        $adherent->marital_status_id=$request->input('marital_status_id');
        $adherent->place_of_birth=$request->input('place_of_birth');
        $adherent->city_id=$request->input('city_id');

        $adherent->QPV=$request->input('QPV')===null ? 0:1;
        $adherent->registration_date=$request->input('registration_date');
        $adherent->user_id=$request->input('user_id');


        $adherent->save();
        return redirect(route('adherent.update',$id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function destroy($id)
    {
        //
        $data=Adherent::findOrFail($id);
        $data->delete();
        return redirect('/dashboard/');
    }
}
