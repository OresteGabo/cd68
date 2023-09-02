<?php

namespace App\Http\Controllers;
use App\Models\Entertainment;

use App\Models\Kid;
use App\Models\KidEntertainment;
use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $perPage = $request->session()->get('perpage', 5);
        $kids = Kid::all();
        $entertainments = Entertainment::orderBy('created_at', 'desc')->paginate($perPage);
        $kids_entertainments= KidEntertainment::all();
        return view('entertainment.index', compact('kids','entertainments','kids_entertainments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'label' => 'required',
            'location' => 'required',
            'day' => 'required',
        ]);
        $entertainment =new Entertainment();
        $entertainment->label=$request->input('label');
        $entertainment->location=$request->input('location');
        $entertainment->day=$request->input('day');

        $entertainment->save();
        return redirect()->route('entertainment.index');
        //$entertainment->kids()->attach($validatedData['kids']);

        // Redirect or return a response as needed
        // ...
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show all the kids that participated in a given entertainment.
     */
    /*public function participatedKids($id)
    {
        //
        $entertainments=Entertainment::find($id);
        $kidEntertainments = KidEntertainment::where('entertainment_id', $id)->get();

        $pKids=[];
        foreach($kidEntertainments as $kidEntertainment){
            if($kidEntertainment->entertainment_id === $id){
                array_push($pKids,$kidEntertainment->kid_id);
            }
        }
        dd($pKids);
        //return $pKids;
        return view('entertainment.participatedkids', compact('pKids','id'));
    }*/
    public function participatedKids($id)
    {
        // Retrieve the entertainment
        $entertainment = Entertainment::find($id);

        // Retrieve the kid entertainments for the specified entertainment
        $kidEntertainments = KidEntertainment::where('entertainment_id', $id)->get();

        $pKids = [];

        // Extract the kid IDs from the kid entertainments
        foreach ($kidEntertainments as $kidEntertainment) {
            array_push($pKids, Kid::find($kidEntertainment->kid_id));
        }

        // Output the result for debugging
        //dd($pKids);

        // Return the view with the list of kid IDs
        return view('entertainment.participatedkids', compact('pKids', 'entertainment'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
