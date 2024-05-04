<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class entrepriseController extends Controller
{
    public function afficher(){
        $list_entr=Entreprise::all();
        return view('entreprise/afficher',compact('list_entr'));
    }

    public function ajouter(Request $request){
        return view('entreprise/ajouter');
    }

    public function suvgarder(Request $req){
        $image=$req->file('photo');
        $image_name=time().'.'.$image->getClientOriginalExtension();
        $image->move('entreprise',$image_name);
        Entreprise::create([
            'nom_entr'=>$req->nom_entr,
            'adress'=>$req->adress,
            'photo'=>$image_name
        ]);
    }
}
