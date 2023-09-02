<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use App\Models\Entertainment;
use App\Models\EntertainmentDescription;
use App\Models\Gender;
use App\Models\Kid;
use App\Models\KidEntertainment;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

function entertainmentsOfAGivenKid(int $id)
{
    return KidEntertainment::where('kid_id', $id)->get();
}
function unassociatedEntertainmentsOfAGivenKid(int $id)
{
    $kidsEntertainments = KidEntertainment::where('kid_id', $id)->get();
    $allEntertainments = Entertainment::all();

    $participatedEntertainmentIds = $kidsEntertainments->pluck('entertainment_id')->toArray();
    $unparticipatedEntertainments = $allEntertainments->reject(function ($entertainment) use ($participatedEntertainmentIds) {
        return in_array($entertainment->id, $participatedEntertainmentIds);
    });

    return $unparticipatedEntertainments;
}


class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->session()->get('perpage', 20);
        return view('kids.index',[
            'kids'=>Kid::orderBy('created_at', 'desc')->paginate($perPage),
            'entertainments'=>Entertainment::all(),
            'entertainmentDescriptions'=>EntertainmentDescription::all(),
            'users'=>User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        //{{$term=$terms->find($payment->terms_id)}}
        //$parent_gender=Gender::find('');

        return view('kids.create',[
            'parents'=>Adherent::all(),
            'genders'=>Gender::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.

     */
    public function store(Request $request)
    {

        $kid =new Kid();

        $kid->first_name=$request->input('first_name');

        $kid->is_handicapped=(bool)$request->input('is_handicapped');
        $kid->family_name=$request->input('family_name');
        $kid->gender_id=$request->input('gender_id');
        $kid->parent_id=$request->input('parent_id');
        $kid->dob=$request->input('dob');
        $kid->save();
        return redirect()->route('kid.index');

        /*
                $kid = Kid::create([
                    'first_name' => $request->input('first_name'),
                    'family_name' => $request->input('family_name'),
                    'dob' => $request->input('dob'),
                    'gender_id' => $request->input('gender_id'),
                    'parent_id' => $request->input('parent_id'),
                ]);*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function show($id)
    {
        //
        $kid=Kid::findOrFail($id);

        //parent
        $parents=User::all();
        $entertainments=Entertainment::all();
        //$participatingEntertainments={{$entertainmentDescriptions=EntertainmentDescription::where('entertainment_id', $entertainment->id)->get()}}
        $entertainmentDescriptions=EntertainmentDescription::all();
        $parent=(User::where('id',$kid->parent_id)->get())[0];
        //dd(entertainmentsOfAGivenKid( $id));
        //dd(unassociatedEntertainmentsOfAGivenKid($id));
        return view('kids.show',
            [
                'kid'=>$kid,
                'entertainments'=>$entertainments,
                'entertainmentDescriptions'=>$entertainmentDescriptions,
                'kid_kidsentertainments'=>entertainmentsOfAGivenKid( $id),
                'unassociatedEntertainmentsOfAGivenKid'=>unassociatedEntertainmentsOfAGivenKid( $id),
                'parent'=>$parent
            ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function edit($id)
    {
        //
        $kid=Kid::findOrFail($id);

        //parent
        $parents=User::all();
        $entertainments=Entertainment::all();
        //$participatingEntertainments={{$entertainmentDescriptions=EntertainmentDescription::where('entertainment_id', $entertainment->id)->get()}}
        $entertainmentDescriptions=EntertainmentDescription::all();

        return view('kids.edit',
            [
                'kid'=>$kid,
                'parents'=>$parents,
                'entertainments'=>$entertainments,
                'entertainmentDescriptions'=>$entertainmentDescriptions,
                'kid_kidsentertainments'=>entertainmentsOfAGivenKid( $id)
            ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
       // $kid->update($request->all());

        $kid = Kid::find($id);
        //dd($request->has('is_admin'));
        // Update user data based on the request
        $kid->family_name = $request->input('family_name');
        $kid->first_name = $request->input('first_name');
        $kid->dob=$request->input('dob');
        $kid->parent_id=$request->input('parent_id');

        // Save the updated user
        //dd($kid);
        $kid->save();

        return redirect()->back()->with('success', 'Kid data updated successfully!');

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
        $data=Kid::findOrFail($id);
        $data->delete();
        return redirect('/dashboard/');
    }


}
