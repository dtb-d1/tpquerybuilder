<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UserController extends Controller{
    public function index(string $id){

        return $id . 'Your id is shit';

    }
   
}



?>