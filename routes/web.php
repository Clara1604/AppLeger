<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return view('welcome');
});

Route::get("/demo/{id}", function($id) {
    echo "id = ".$id;
})->where(["id"=>"[0-9]+"]);

Route::get("/testconfig", function(){
    $p = DB::select("SELECT * FROM pompiers WHERE Matricule=?" , ["Ma0001"]);
    ddd($p);
});

Route::get("/testeloquent/{matricule}", function($matricule){
    $pompier = \App\Models\pompiers::find($matricule)->Caserne;
    ddd($pompier);
})->where(["matricule"=>"Ma[0-9]{4}"]);

Route::get("/testeloquent/{numcaserne}", function($numcaserne){
    $caserne = \App\Models\Casernes::find($numcaserne)->Pompier;
    ddd($caserne);
})->where(["numcaserne"=>"[0-9]"]);

Route::get("/viewAccueil", [\App\Http\Controllers\ControllerAccueil::class, "hello"]);
