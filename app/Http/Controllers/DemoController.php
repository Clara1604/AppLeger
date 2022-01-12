<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    public function hello($name, Request $request) {

        //ddd($request);
        Log::info("message niveau info");
        return"Bonjour".$name;
    }
}
