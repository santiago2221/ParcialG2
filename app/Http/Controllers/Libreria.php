<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libreria extends Controller
{
    public function librerias(){
        return view('libreria.index');
    } 
}
