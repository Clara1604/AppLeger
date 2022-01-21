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

Route::get("/accueil", [\App\Http\Controllers\ControllerAccueil::class, "hello"])->name("goHome");

Route::get("/secteurs", [\App\Http\Controllers\ControllerSecteurs::class, "hello"])->name("goSecteurs");

Route::get("/responsables", [\App\Http\Controllers\ControllerResponsables::class, "hello"])->name("goResponsables");

Route::get("/delegues", [\App\Http\Controllers\ControllerDelegues::class, "hello"])->name("goDelegues");

Route::get("/visiteurs", [\App\Http\Controllers\ControllerVisiteurs::class, "hello"])->name("goVisiteurs");

Route::get("/AddVisiteur",[\App\Http\Controllers\ControllerVisiteurs::class, "add"])->name("addVisiteurs");

Route::get("/AddDelegues", [\App\Http\Controllers\ControllerDelegues::class, "add"])->name("addDelegues");

Route::get("/AddResponsables", [\App\Http\Controllers\ControllerResponsables::class, "add"])->name("addResponsables");

Route::get("/AddSecteurs", [\App\Http\Controllers\ControllerSecteurs::class, "add"])->name("addSecteurs");

Route::post('/AjoutSecteurs', function() {
    $secteurs = new App\Models\Secteurs();
    $secteurs->SectCode = request('SectCode');
    $secteurs->SectNom = request('SectNom');

    $secteurs->save();
})->name("ajoutSecteurs");

