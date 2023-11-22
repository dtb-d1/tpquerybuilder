<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PackageController extends Controller
{
    public function index()
    {
        $packages = [
            ['id' => 1, 'title' => 'Spatie', 'slug' => 'spatie'],
            ['id' => 2, 'title' => 'No Captcha', 'slug' => 'no-captcha'],
            ['id' => 3, 'title' => 'SEOTools', 'slug' => 'seotools']
        ];

        return view('packages.index', compact('packages'));
    }

    public function show($slug)
    {
        $packages = [
            ['id' => 1, 'title' => 'Spatie', 'slug' => 'spatie'],
            ['id' => 2, 'title' => 'No Captcha', 'slug' => 'no-captcha'],
            ['id' => 3, 'title' => 'SEOTools', 'slug' => 'seotools']
        ];

        $package = null;

        foreach ($packages as $p) {
            if ($p['slug'] === $slug) {
                $package = $p;
                break;
            }
        }

        if ($package) {
            return view('packages.single', compact('package'));
        } else {
            return view('packages.single', ['package' => null]);
        }
    }
}
