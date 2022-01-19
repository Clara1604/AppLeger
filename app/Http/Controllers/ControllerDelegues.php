<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ControllerDelegues extends Controller
{
    public function hello(Request $request) {

        $delegues = \App\Models\Delegues::all();



        return view("viewDelegues", ["viewDelegues"=>$delegues]);

    }
}