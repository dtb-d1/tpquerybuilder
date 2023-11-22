<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoneyConvert extends Controller
{
    //
    function index (Request $request){
        $nom = $request->Nom;
        $montant = $request->montant;
        $devise = $request->devise;
        if($devise=='USD'){
            $converted=$montant*10.3;
        }elseif($devise=='CAD'){
            $converted=$montant*7.6;
    
        }elseif($devise=='UGB'){
            $converted=$montant*12.5;
    
        }else{
            $converted = $montant*10.9;
        }
        $data = [
            'Nom' => $nom,
            'montant' => $montant,
            'devise' => $devise,
            'converted'=>$converted
        ];
    
        return view('convertisseur',$data);
    
    }
}
