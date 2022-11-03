<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EpreuveController;
use App\Http\Controllers\MatiereController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template');
});


Route::get('/matiere', [MatiereController::class,'index']);
Route::get('/matiere','App\Http\Controllers\MatiereController@index')->name('matiere');

Route::get('/epreuve', [EpreuveController::class,'index']);
Route::get('/epreuve','App\Http\Controllers\EpreuveController@index')->name('epreuve');
Route::get('/epreuve/ad', [EpreuveController::class,'store'])->name('epreuve');
    
Route::get('/epreuve/id', [EpreuveController::class,'FIndById']);
Route::get('/matiere/ad', [MatiereController::class,'store'])->name('matiere');
Route::get('/matiere/id', [MatiereController::class,'FIndById']);

Route::post('/matiere/Fm', [MatiereController::class,'UserForm']);
Route::get('/matiere/Fmm', [MatiereController::class,'createUserForm']) ;
