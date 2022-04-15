<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ControllerDelegues extends Controller
{
    public function hello(Request $request) {

        $delegues = \App\Models\Delegues::all();

        return view("Read/viewDelegues", ["viewDelegues"=>$delegues]);

    }

    public function add(Request $request) {

        $delegues = \App\Models\Delegues::all();

        return view("Create/createDelegues", ["createDelegues"=>$delegues]);

    }

    public function upd(Request $request) {

        $delegues = \App\Models\Delegues::all();

        return view("Update/updateDelegues", ["updateDelegues"=>$delegues]);

    }

    public function del(Request $request) {

        $delegues = \App\Models\Delegues::all();

        return view("Delete/deleteDelegues", ["deleteDelegues"=>$delegues]);

    }
}