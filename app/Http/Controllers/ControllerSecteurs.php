<?php

namespace App\Http\Controllers;

use App\Models\Secteurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

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

        $secteur->delete();

        return back();

    }
}