<?php

namespace App\Models;

use App\Models\epreuve;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class matiere extends Model
{  
    use HasFactory;
   protected $table = 'matiere';

   public function epreuve()

    { //q2
         // $eps = App\Models\matiere::where('lib','code')->first()->epreuve()->get()
        return $this->hasMany(epreuve::class,'codeMat');
    }

} 
