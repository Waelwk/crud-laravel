<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class epreuve extends Model
{ use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'epreuve';
    public $timestamps = false;
    
    public function matiere()
    {

    return  $this->BelongsTo(matiere::class,'codeMat') ;
    //Q2
//$eps=App\Models\epreuve::find(1)->matiere()->first();
//Q2
//$eps = App\Models\Epreuve::where('codeMat', '1')->first();
    }
}