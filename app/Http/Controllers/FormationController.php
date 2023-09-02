<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cours=[
            ['name'=>'']
        ];
        return view('formation.index');
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


    /**
     * Savoirs de base (index page)
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function sdb(){
        return view('formation.savoirs-de-base.index');
    }


    /**
     * Savoirs de base, sessions 1
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function sdbSession1(){
        return view('formation.savoirs-de-base.session1');
    }

    /**
     * Savoirs de base, sessions 2
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function sdbSession2(){
        return view('formation.savoirs-de-base.session2');
    }

    /**
     * Savoirs de base, Formation de base flyer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function sdbFlyer(){
        return view('formation.savoirs-de-base.flyer');
    }

    /**
     * Initiation internet email
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function email(){
        return view('formation.informatique.email');
    }

    /**
     * Initiation internet email
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function word(){
        return view('formation.informatique.word');
    }

    /**
     * Initiation internet email
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function excel(){
        return view('formation.informatique.excel');
    }

    /**
     * Pour parler
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function pourParler(){
        return view('formation.pour-parler');
    }

    public function linguistiqueLE1(){
        return view('formation.linguistique.le1');
    }
    public function linguistiqueLE2(){
        return view('formation.linguistique.le2');
    }
    public function linguistiqueA1(){
        return view('formation.linguistique.a1');
    }
    public function linguistiqueA2(){
        return view('formation.linguistique.a2');
    }
    public function linguistiqueB1(){
        return view('formation.linguistique.b1');
    }
    public function linguistiqueB2(){
        return view('formation.linguistique.b2');
    }


    public function mesure(){
        return view('formation.mesure');
    }

}
