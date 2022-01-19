<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ControllerVisiteurs extends Controller
{
    public function hello(Request $request) {

        $visiteurs = \App\Models\Visiteurs::all();

        return view("viewVisiteurs", ["viewVisiteurs"=>$visiteurs]);

    }

    public function add(Request $request) {

        $visiteurs = \App\Models\Visiteurs::all();

        return view("createVisiteurs", ["createVisiteurs"=>$visiteurs]);

    }


}