<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ControllerSecteurs extends Controller {

    public function hello(Request $request) {

        $secteurs = \App\Models\Secteurs::all();



        return view("viewSecteurs", ["viewSecteurs"=>$secteurs]);

    }
}