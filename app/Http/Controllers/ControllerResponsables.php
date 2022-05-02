<?php

namespace App\Http\Controllers;

use App\Models\Responsables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;


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

        try{
            $responsable->delete();
    
            return back();
            }catch(QueryException $q){
                return back()->with("echecAjout", "vous ne pouvez pas supprimer ce responsable, car des délégués lui sont affectés");
    
            }

    }

    public function search() {
        $q = request()->input('q');
        $responsables = \App\Models\Responsables::Where('IdResp','like',"%$q%")
        ->orWhere('RespNom','like',"%$q%")
        ->orWhere('RespPrenom','like',"%$q%")
        ->orWhere('RespTel','like',"%$q%")
        ->orWhere('RespMail','like',"%$q%")
        ->orWhere('SectCode','like',"%$q%")->get();

        return view('Search/searchResponsables')->with('responsables', $responsables);
    }
}