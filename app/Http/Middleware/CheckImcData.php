<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckImcData
{
    public function handle($request, Closure $next)
    {
        $data = $request->all();

        if (empty($data['nom']) || empty($data['prenom']) || empty($data['poids']) || empty($data['taille'])) {
            return redirect()->back()->with('error', 'Veuillez remplir tous les champs.');
        }

        return $next($request);
    }
}
