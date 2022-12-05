<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use Illuminate\Http\Request;

class MatiereControllerN extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $matieres = DB::select('SELECT * FROM MATIERE ');
        $matieres=matiere::paginate(6);

        return view('matiere', compact('matieres'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view("FormMat")   ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
           $req->validate([
         
            'lib' => 'required',
            'coef' => 'required',

        ]);


        $mat = new Matiere();
  
        $mat->lib = $req->input('lib');
        $mat->Coef = $req->input('coef');
        $mat->save();
        return redirect("/MatiereN");
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
        $matiere= Matiere::find($id);
        return view('edit', compact('matiere'));  // -> resources/views/stocks/edit.blade.php
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $req->validate([
         
            'lib' => 'required',
            'coef' => 'required',

        ]);


        $mat =  Matiere::find($id);
  
        $mat->lib = $req->input('lib');
        $mat->Coef = $req->input('coef');
        $mat->save();
        return redirect("/MatiereN");
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mat = matiere::find($id);
            $mat->delete(); // Easy right?
    
            return redirect('/MatiereN')->with('success', 'matiere supprimé.');
            return redirect("/MatiereN");  }
}
