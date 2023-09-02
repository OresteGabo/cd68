<?php

namespace App\Http\Controllers;

use App\Models\Entertainment;
use App\Models\Kid;
use App\Models\KidEntertainment;
use Illuminate\Http\Request;

class KidEntertainmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $perPage = $request->session()->get('perpage', 5);
        $kids = Kid::all();
        $entertainments = Entertainment::orderBy('created_at', 'desc')->paginate($perPage);
        $kids_entertainments= KidEntertainment::all();
        return view('entertainment.index', compact('kids','entertainments','kids_entertainments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('kid_entertainment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kid_entertainment=new KidEntertainment();
        $kid_entertainment->kid_id=$request->input('kid_id');
        $kid_entertainment->entertainment_id=$request->input('entertainment_id');



        $kid_entertainment->save();
        //return redirect('adherent/'.{{$payment->adherents_id}});
        return redirect(route('kid.show',$kid_entertainment->kid_id));
        //$adherent->gender_id=$request->input('gender_id');
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
}
