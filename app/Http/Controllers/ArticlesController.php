<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
    public function showFournisseurs()
    {
        $fournisseurs = DB::table('fournisseurs')->get();
    
        return view('data', ['fournisseurs' => $fournisseurs, 'selectedFournisseur' => null]);
    }
    
    public function getArticlesByFournisseur(Request $request)
    {
        $fournisseurId = $request->input('fournisseur');
        $fournisseur = DB::table('fournisseurs')->where('id', $fournisseurId)->first();
        
        if ($fournisseur) {
            $articles = DB::table('articles')->where('id_fournisseur', $fournisseurId)->get();
        } else {
            $articles = [];
            $fournisseur = null;
        }
    
        $allFournisseurs = DB::table('fournisseurs')->get();
    
        return view('data', [
            'fournisseurs' => $allFournisseurs,
            'selectedFournisseur' => $fournisseur,
            'articles' => $articles,
        ]);
    }
}
