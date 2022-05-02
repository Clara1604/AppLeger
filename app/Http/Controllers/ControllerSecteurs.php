<?php

namespace App\Http\Controllers;

use App\Models\Secteurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class ControllerSecteurs extends Controller {

    public function hello(Request $request) {

        $secteurs = \App\Models\Secteurs::paginate(5);

        return view("Read/viewSecteurs", ["viewSecteurs"=>$secteurs]);

    }

    public function add(Request $request) {

        $secteurs = \App\Models\Secteurs::all();

        return view("Create/createSecteurs", ["createSecteurs"=>$secteurs]);

    }

    public function create(Request $request) {

        $res = DB::table('Secteur')->insert([

            'SectCode' => $request->input('SectCode'),
            'SectNom' => $request->input('SectNom'),
        ]);


        return redirect('/secteurs');
        //->with("successAjout", "le porteur' '$request->PORTNom'a été ajouté avec succès");

    }

    public function upd($id) {

        $secteurs = \App\Models\Secteurs::findorfail($id);

        return view("Update/updateSecteurs", compact('secteurs'));

    }

    public function modif(Request $request, Secteurs $secteur) {

        $res = DB::table('Secteur')->where('SectCode','=', $secteur->SectCode)
        ->update([ 
            'SectNom' => $request->input('SectNom'),
        ]);


        return redirect('/secteurs');
    }

    public function del(Request $request, Secteurs $secteur) {


        try{
        $secteur->delete();

        return back();
        }catch(QueryException $q){
            return back()->with("echecAjout", "vous ne pouvez pas supprimer ce secteur, car des responsables lui sont affectés");

        }

    }

    public function search() {
        $q = request()->input('q');
        $secteurs = \App\Models\Secteurs::Where('SectCode','like',"%$q%")
        ->orWhere('SectNom','like',"%$q%")->get();

        return view("Search/searchSecteurs")->with('secteurs', $secteurs);
    }
}