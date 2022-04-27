<?php

namespace App\Http\Controllers;

use App\Models\Delegues;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ControllerDelegues extends Controller
{
    public function hello(Request $request) {

        $delegues = \App\Models\Delegues::paginate(5);

        return view("Read/viewDelegues", ["viewDelegues"=>$delegues]);

    }

    public function add(Request $request) {

        $delegues = \App\Models\Delegues::all();

        return view("Create/createDelegues", ["createDelegues"=>$delegues]);

    }

    public function create(Request $request) {

        $res = DB::table('Delegue')->insert([

            'IdDel' => $request->input('IdDel'),
            'DelNom' => $request->input('DelNom'),
            'DelPrenom' => $request->input('DelPrenom'),
            'DelTel' => $request->input('DelTel'),
            'DelMail' => $request->input('DelMail'),
            'IdResp' => $request->input('IdResp'),

        ]);

        return redirect('/delegues');
    }

    public function upd($id) {

        $delegues = \App\Models\Delegues::findorfail($id);

        return view("Update/updateDelegues", compact('delegues'));

    }

    public function modif(Request $request, Delegues $delegue) {

        $res = DB::table('Delegue')->where('IdDel','=', $delegue->IdDel)
        ->update([
            'DelNom' => $request->input('DelNom'),
            'DelPrenom' => $request->input('DelPrenom'),
            'DelTel' => $request->input('DelTel'),
            'DelMail' => $request->input('DelMail'),
            'IdResp' => $request->input('IdResp'),
        ]);


        return redirect('/delegues');
    }

    public function del(Request $request, Delegues $delegue) {

        $delegue->delete();

        return back();

    }
}