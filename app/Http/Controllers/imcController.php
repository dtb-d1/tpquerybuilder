<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class imcController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkImcData', ['only' => 'processImc']);
    }
    //
    function processImc(Request $request){

        $nom=$request->nom;
        $prenom= $request->prenom;
        $poids = $request->poids;
        $taille = $request->taille;
        $imcDegree = $poids / ($taille*$taille);

        $result='';
        $data='';
        if($imcDegree==30){
            $result = 'Obesite';

        }elseif($imcDegree>=25){
            $result = 'Surpoids';
        }elseif($imcDegree>18.5){
            $result  = 'Poids ideal';
        }else{
            $result='Maigre';
        }
        $data = array(
            'nom'=>$nom,
            'prenom'=>$prenom,
            'result'=>$result,
        );
        return view('imc',$data);


    }

}
