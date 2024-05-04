<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Partie_corp;
use App\Models\Malade;
use App\Models\Consigne;
use App\Models\Symptome;
use App\Models\Medcin;

class Controller extends BaseController
{

    public function afficher_partie_corp(){
        $list=Partie_corp::all();
        return $list;
    }

    public function afficher_malade($idp,$idg){
        //$list=Malade::all();
        $list = Malade::where('id_parties_corps', $idp)
                ->where(function($query) use ($idg) {
                    $query->where('id_genre', $idg)
                          ->orWhere('id_genre', 4);
                })
                ->get();
        return $list;
    }

    public function afficher_Symptome($idm){
        $list=Symptome::where('id_malade',$idm)->get();
        return $list;
    }
    public function afficher_consigne($idm){
        $list=Consigne::where('id_malade',$idm)->get();
        return $list;
    }

    public function afficher_medcin($ids){
        $list=Medcin::where('id_specialite',$ids)->get();
        return $list;
    }

    
    use AuthorizesRequests, ValidatesRequests;
}
