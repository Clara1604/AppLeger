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

Route::get("/viewAccueil", [\App\Http\Controllers\ControllerAccueil::class, "hello"]);

Route::get("/viewSecteurs", [\App\Http\Controllers\ControllerSecteurs::class, "hello"]);

Route::get("/viewResponsables", [\App\Http\Controllers\ControllerResponsables::class, "hello"]);

Route::get("/viewDelegues", [\App\Http\Controllers\ControllerDelegues::class, "hello"]);

Route::get("/viewVisiteurs", [\App\Http\Controllers\ControllerVisiteurs::class, "hello"]);