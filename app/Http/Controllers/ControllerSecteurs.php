<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ControllerSecteurs extends Controller
{
    public function hello() {

        return view("viewSecteurs");

    }
}