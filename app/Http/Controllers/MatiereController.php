<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MatiereController extends Controller
{
    /* public function index()
     {
         $matieres = [
             ['Code' => 'algo', 'Libelle' => 'algorithmique', 'Coefficient' => '3'],
             ['Code' => 'DevWeb', 'Libelle' => 'Developpemnt Web', 'Coefficient' => '3'],
         ];

         return view('matiere', compact('matieres'));
     }
}
*/
    public function index()
    {
        // $matieres = DB::select('SELECT * FROM MATIERE ');
        $matieres=matiere::all();

        return view('matiere', compact('matieres'));
    }
        public function store()
        {
            $mat=new matiere();
            $mat->lib='code';
            $mat->coef='4';
            $mat->save();
            // DB::insert("INSERT INTO MATIERE ( `lib`, `coef`) VALUES ('code','3')");
            //$matieres = DB::select('SELECT * FROM MATIERE ');

            // return view('matiere', compact('matieres'));
            return redirect('matiere');
        }
    public function FIndById()
    {
        //$epreuves = DB::select('SELECT * FROM epreuve ');

        //$matieres = $matieres = Matiere::where('codeMat', '=', 5)->get();
        //return view('matiere', compact('matieres'));
    }
        public function createUserForm()
        {
            return view('FormMat');
        }
        
          public function UserForm( Request $request)
          { 
            $mat = new matiere();
            $mat->lib = $request->lib;
            $mat->coef = $request->coef;
            $mat->save();
       
            return redirect('FormMat')->with('status', 'Blog Post Form Data Has Been inserted');
          }
}
