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
        //$matieres = DB::select('SELECT * FROM MATIERE ');
        $matieres=matiere::all();

        return view('matiere', compact('matieres'));
    }
        public function storee()
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
    public function store(Request $req)
    {
        //DB::insert('insert into matiere (code, libelle, Coefficient) values (?, ?, ?)', ['algo', 'algorithmique', '3']);
        //DB::insert('insert into epreuve (date, lieu, code) values (?, ?, ?)', ['DevWeb', 'Developpemnt Web', '3']);
        /*
        $mat = new Matiere;
        $mat->code = "2CN";
        $mat->libelle = "2cnnnn";
        $mat->Coefficient = "2";
        $mat->save();
        */
        $req->validate([
         
            'lib' => 'required',
            'coef' => 'required',

        ]);


        $mat = new Matiere();
  
        $mat->lib = $req->input('lib');
        $mat->Coef = $req->input('coef');
        $mat->save();
        return redirect('MatiereN');
    }
}