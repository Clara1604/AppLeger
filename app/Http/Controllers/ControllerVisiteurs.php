<?php

namespace App\Http\Controllers;

use App\Models\Visiteurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ControllerVisiteurs extends Controller
{
    public function hello(Request $request) {

        $visiteurs = \App\Models\Visiteurs::paginate(5);

        return view("Read/viewVisiteurs", ["viewVisiteurs"=>$visiteurs]);

    }

    public function add(Request $request) {

        $visiteurs = \App\Models\Visiteurs::all();

        return view("Create/createVisiteurs", ["createVisiteurs"=>$visiteurs]);

    }

    public function create(Request $request) {

        $res = DB::table('Visiteur')->insert([

            'IdVis' => $request->input('IdVis'),
            'VisNom' => $request->input('VisNom'),
            'VisPrenom' => $request->input('VisPrenom'),
            'VisTel' => $request->input('VisTel'),
            'VisMail' => $request->input('VisMail'),
            'IdDel' => $request->input('IdDel'),

        ]);


        return redirect('/visiteurs');

    }

    public function upd($id) {

        $visiteurs = \App\Models\Visiteurs::findorfail($id);

        return view("Update/updateVisiteurs", compact('visiteurs'));

    }

    public function modif(Request $request, Visiteurs $visiteur) {

        $res = DB::table('Visiteur')->where('IdVis','=', $visiteur->IdVis)
        ->update([
            'VisNom' => $request->input('VisNom'),
            'VisPrenom' => $request->input('VisPrenom'),
            'VisTel' => $request->input('VisTel'),
            'VisMail' => $request->input('VisMail'),
            'IdDel' => $request->input('IdDel'),
        ]);


        return redirect('/visiteurs');
    }

    public function del(Request $request, Visiteurs $visiteur) {

        $visiteur->delete();
        return back();

    }
}