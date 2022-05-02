<?php

use App\Http\Controllers\ControllerResponsables;
use App\Http\Controllers\ControllerSecteurs;
use App\Models\Secteurs;
use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

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

Route::post("/AddSecteurs", [\App\Http\Controllers\ControllerSecteurs::class, "create"])->name("AddSecteurs");

Route::post("/AddResponsables", [\App\Http\Controllers\ControllerResponsables::class, "create"])->name("AddResponsables");

Route::post("/AddDelegues", [\App\Http\Controllers\ControllerDelegues::class, "create"])->name("AddDelegues");

Route::post("/AddVisiteurs", [\App\Http\Controllers\ControllerVisiteurs::class, "create"])->name("AddVisiteurs");


#Routes pour voir formulaire de modif SECTEURS

Route::get("/UpdSecteurs/{secteur}", [\App\Http\Controllers\ControllerSecteurs::class, "upd"])->name("updateSecteurs");
Route::post("/UpdSecteurs/{secteur}", [\App\Http\Controllers\ControllerSecteurs::class, "modif"])->name("updateSecteurs");

Route::get("/UpdResponsables/{responsable}", [\App\Http\Controllers\ControllerResponsables::class, "upd"])->name("updateResponsables");
Route::post("/UpdResponsables/{responsable}", [\App\Http\Controllers\ControllerResponsables::class, "modif"])->name("updateResponsables");

Route::get("/UpdDelegues/{delegue}", [\App\Http\Controllers\ControllerDelegues::class, "upd"])->name("updateDelegues");
Route::post("/UpdDelegues/{delegue}", [\App\Http\Controllers\ControllerDelegues::class, "modif"])->name("updateDelegues");

Route::get("/UpdVisiteurs/{visiteur}", [\App\Http\Controllers\ControllerVisiteurs::class, "upd"])->name("updateVisiteurs");
Route::post("/UpdVisiteurs/{visiteur}", [\App\Http\Controllers\ControllerVisiteurs::class, "modif"])->name("updateVisiteurs");



#DELETE

Route::delete("/Secteurs/{secteur}", [\App\Http\Controllers\ControllerSecteurs::class, "del"])->name("deleteSecteurs");

Route::delete("/Responsables/{responsable}", [\App\Http\Controllers\ControllerResponsables::class, "del"])->name("deleteResponsables");

Route::delete("/Delegues/{delegue}", [\App\Http\Controllers\ControllerDelegues::class, "del"])->name("deleteDelegues");

Route::delete("/Visiteurs/{visiteur}", [\App\Http\Controllers\ControllerVisiteurs::class, "del"])->name("deleteVisiteurs");


# SEARCH

Route::get('SecteursSearch', [ControllerSecteurs::class, 'search'])->name("goSecteursSearch");

Route::get('ResponsablesSearch', [ControllerResponsables::class, 'search'])->name("goResponsablesSearch");