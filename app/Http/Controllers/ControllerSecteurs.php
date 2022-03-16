<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ControllerSecteurs extends Controller {

    public function hello(Request $request) {

        $secteurs = \App\Models\Secteurs::all();

        return view("Read/viewSecteurs", ["viewSecteurs"=>$secteurs]);

    }

    public function add(Request $request) {

        $secteurs = \App\Models\Secteurs::all();

        return view("Create/createSecteurs", ["createSecteurs"=>$secteurs]);

    }

    public function upd(Request $request) {

        $secteurs = \App\Models\Secteurs::all();

        return view("Update/updateSecteurs", ["updateSecteurs"=>$secteurs]);

    }
}