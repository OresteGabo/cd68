<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use Illuminate\Http\Request;

class PromptController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'family_name'=>'required',
            'first_name'=>'required',
            'email'=>'required|email',
            'description'=>'required'
        ]);
        //
        $requestData =new Prompt;


        $family_name=$requestData->family_name = $request->input('family_name');
        $first_name=$requestData->first_name=$request->input('first_name');
        $email=$requestData->email = $request->input('email');
        $request_type=$requestData->request_type = $request->input('request_type');
        $description=$requestData->description = $request->input('description');

        //dd($requestData);
        $save = $requestData->save();
        //dd($save);

        /*
        $requestData->email = $request->input('email');
        $requestData->description = $request->input('description');
        $requestData->family_name = $request->input('family_name');
        $requestData->first_name = $request->input('first_name');
        $requestData->request_type = $request->input('request_type');*/

                /*$requestData->email="oreste@gabo.muhirwa";
                $requestData->description="This is a very brief description of a request";
                $requestData->family_name="Family name";
                $requestData->first_name="first name";
                $requestData->request_type=1;*/

        //dd($requestData);

        if($save){
            return redirect('/')->with(['request_sent' => 'Votre demandé est reçu, on vous contactera bientot']);
        }
        return redirect('/')->with(['request_sent_error' => 'Erreur! veuillez réessayer svp!']);


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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $data=Prompt::findOrFail($id);
        $data->delete();
        return redirect('/dashboard/');
    }
}
