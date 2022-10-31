<?php

namespace App\Http\Controllers;

use App\Models\epreuve;
use Illuminate\Support\Facades\DB;

class EpreuveController extends Controller

{
    /* public function index()
     {
         $epreuves = [
             ['date' => '23/09/2019', 'lieu' => '110', 'code' => 'algho'],
             ['date' => '24/09/2019', 'lieu' => '112', 'code' => 'dev web'],
         ];

         return view('epreuve', compact('epreuves'));
     } */
    public function index()
    {
        //$epreuves = DB::select('SELECT * FROM epreuve ');

$epreuves=epreuve::all();
        return view('epreuve', compact('epreuves'));
    }
    public function store()
    {

        $epreuv=new epreuve();
        $epreuv->dateepreuve ='2022-10-04';
        $epreuv->lieu ='houmet sook ';
        $epreuv->codeMat= 1;
        $epreuv->save();

        //DB::insert("INSERT INTO epreuve  ( `dateepreuve`, `lieu`) VALUES ('	2022-10-04','djerba ')");
        //$matieres = DB::select('SELECT * FROM MATIERE ');

        // return view('matiere', compact('matieres'));
        return redirect('epreuve');
    }



    public function FIndById()
    {
        //$epreuves = DB::select('SELECT * FROM epreuve ');

        $epreuves = epreuve::where('numepreuve', '=', 1)->get();
        return view('epreuve', compact('epreuves'));
    }
    
}

