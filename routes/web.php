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

#Routes des READ

Route::get("/accueil", [\App\Http\Controllers\ControllerAccueil::class, "hello"])->name("goHome");

Route::get("/secteurs", [\App\Http\Controllers\ControllerSecteurs::class, "hello"])->name("goSecteurs");

Route::get("/responsables", [\App\Http\Controllers\ControllerResponsables::class, "hello"])->name("goResponsables");

Route::get("/delegues", [\App\Http\Controllers\ControllerDelegues::class, "hello"])->name("goDelegues");

Route::get("/visiteurs", [\App\Http\Controllers\ControllerVisiteurs::class, "hello"])->name("goVisiteurs");

Route::get("/AddVisiteurs",[\App\Http\Controllers\ControllerVisiteurs::class, "add"])->name("addVisiteurs");

Route::get("/AddDelegues", [\App\Http\Controllers\ControllerDelegues::class, "add"])->name("addDelegues");

Route::get("/AddResponsables", [\App\Http\Controllers\ControllerResponsables::class, "add"])->name("addResponsables");

Route::get("/AddSecteurs", [\App\Http\Controllers\ControllerSecteurs::class, "add"])->name("addSecteurs");

#Routes des CREATE

Route::post("/AddSecteurs", function() {
    $secteurs = new App\Models\Secteurs();
    $secteurs->SectCode = request('SectCode');
    $secteurs->SectNom = request('SectNom');

    $secteurs->save();

    return redirect('/secteurs');
})->name("AddSecteurs");


Route::post("/AddResponsables", function() {
    $responsables = new App\Models\Responsables();
    $responsables->IdResp = request('IdResp');
    $responsables->RespNom = request('RespNom');
    $responsables->RespPrenom = request('RespPrenom');
    $responsables->RespTel = request('RespTel');
    $responsables->RespMail = request('RespMail');
    $responsables->SectCode = request('SectCode');

    $responsables->save();

    return redirect('/responsables');
})->name("AddResponsables");

Route::post("/AddDelegues", function() {
    $delegues = new App\Models\Delegues();
    $delegues->IdDel = request('IdDel');
    $delegues->DelNom = request('DelNom');
    $delegues->DelPrenom = request('Delprenom');
    $delegues->DelTel = request('DelTel');
    $delegues->DelMail = request('DelMail');
    $delegues->IdResp = request('IdResp');

    $delegues->save();

    return redirect('/delegues');
})->name("AddDelegues");


Route::post("/AddVisiteurs", function() {
    $visiteurs = new App\Models\Visiteurs();
    $visiteurs->IdVis = request('IdVis');
    $visiteurs->VisNom = request('VisNom');
    $visiteurs->VisPrenom = request('VisPrenom');
    $visiteurs->VisTel = request('VisTel');
    $visiteurs->VisMail = request('VisMail');
    $visiteurs->IdDel = request('IdDel');

    $visiteurs->save();

    return redirect('/visiteurs');
})->name("AddVisiteurs");

#Routes pour voir formulaire de modif SECTEURS

Route::get("/UpdSecteurs", [\App\Http\Controllers\ControllerSecteurs::class, "upd"])->name("updateSecteurs");