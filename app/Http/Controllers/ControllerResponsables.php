<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ControllerResponsables extends Controller
{
    public function hello(Request $request) {

        $responsables = \App\Models\Responsables::all();

        return view("Read/viewResponsables", ["viewResponsables"=>$responsables]);

    }

    public function add(Request $request) {

        $responsables = \App\Models\Responsables::all();

        return view("Create/createResponsables", ["createResponsables"=>$responsables]);

    }

    public function upd(Request $request) {

        $responsables = \App\Models\Responsables::all();

        return view("Update/updateResponsables", ["updateResponsables"=>$responsables]);

    }
}