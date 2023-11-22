<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PretCalculator extends Controller
{
    //
    function index(Request $request){
        $montant = $request->montant;
        $duree = $request->duree;
        $taux = $request->taux;
    
        $monthlyInterestRate = $taux / (12 * 100); // Convert annual interest rate to monthly and to decimal
        $mensualite = ($montant * $monthlyInterestRate) / (1 - pow(1 + $monthlyInterestRate, -$duree));
        if ($mensualite <= 1000) {
            $color = 'vert';  // Green
        } elseif ($mensualite <= 2000) {
            $color = 'orange';  // Orange
        } else {
            $color = 'rouge';  // Red
        }
        return view('pretBancaire',['mensualite'=>$mensualite,'color'=>$color]);
    }
}
