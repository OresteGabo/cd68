<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Activity;
use App\Models\Adherent;
use App\Models\AgeGap;
use App\Models\City;
use App\Models\Country;
use App\Models\EducationLevel;
use App\Models\Gender;
use App\Models\Group;
use App\Models\IncomeType;
use App\Models\LegalSituation;
use App\Models\MaritalStatus;
use App\Models\PaymentMethod;
use App\Models\StudyLevel;
use App\Models\Teacher;
use App\Models\Year;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    ///TODO Dashboard controller should be deleted and replaced by this function
    /**
     * Dashboard
     * @return |\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function dashboard(){
        return view('');
    }

    public function settings(){
        $adherents=Adherent::orderBy('family_name')->get();
        $age_gaps=AgeGap::all();
        $education_levels=EducationLevel::all();
        $genders=Gender::all();
        $income_types=IncomeType::all();
        $groups=Group::all();
        $teachers=Teacher::all();
        $years=Year::all();
        $payment_methods=PaymentMethod::all();
        $study_levels=StudyLevel::all();
        $marital_statuses=MaritalStatus::all();
        $legal_situations=LegalSituation::all();
        $countries=Country::all();
        $cities=City::all();
        $activities=Activity::all();
        return view('settings.index',
            [
                'adherents'=>$adherents,
                'age_gaps'=>$age_gaps,
                'cities'=>$cities,
                'income_types'=>$income_types,
                'genders'=>$genders,
                'groups'=>$groups,
                'teachers'=>$teachers,
                'years'=>$years,
                'payment_methods'=>$payment_methods,
                'study_levels'=>$study_levels,
                'marital_statuses'=>$marital_statuses,
                'legal_situations'=>$legal_situations,
                'countries'=>$countries,
                'activities'=>$activities,
                'education_levels'=>$education_levels
            ]
        );
    }
}
