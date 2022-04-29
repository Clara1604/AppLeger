<?php

namespace App\Http\Controllers;

use App\Models\Responsables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ControllerResponsables extends Controller
{
    public function hello(Request $request) {

        $responsables = \App\Models\Responsables::paginate(5);

        return view("Read/viewResponsables", ["viewResponsables"=>$responsables]);

    }

    public function add(Request $request) {

        $responsables = \App\Models\Responsables::all();

        return view("Create/createResponsables", ["createResponsables"=>$responsables]);

    }

    public function create(Request $request) {

        $res = DB::table('Respoinsable')->insert([

            'IdResp' => $request->input('IdResp'),
            'RespNom' => $request->input('RespNom'),
            'RespPrenom' => $request->input('RespPrenom'),
            'RespTel' => $request->input('RespTel'),
            'RespMail' => $request->input('RespMail'),
            'SectCode' => $request->input('SectCode'),
        ]);


        return redirect('/responsables');
        //->with("successAjout", "le porteur' '$request->PORTNom'a été ajouté avec succès");
    }

    public function upd($id) {

        $responsables = \App\Models\responsables::findorfail($id);

        return view("Update/updateResponsables", compact('responsables'));

    }

    public function modif(Request $request, Responsables $responsable) {

        $res = DB::table('Responsable')->where('IdResp','=', $responsable->IdResp)
        ->update([
            'RespNom' => $request->input('RespNom'),
            'RespPrenom' => $request->input('RespPrenom'),
            'RespTel' => $request->input('RespTel'),
            'RespMail' => $request->input('RespMail'),
            'SectCode' => $request->input('SectCode'),
        ]);


        return redirect('/responsables');
    }

    public function del(Request $request, Responsables $responsable) {

        ddd($responsable);
        // $responsables->delete();

        return back();

    }
}