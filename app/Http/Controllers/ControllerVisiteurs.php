<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ControllerVisiteurs extends Controller
{
    public function hello() {

        return view("viewVisiteurs");

    }
}