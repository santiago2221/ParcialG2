<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Libro extends Controller
{
    public function libros_listado(){
        $libros = DB :: table ('libro')->join('areaconocimiento','Area','=','idArea')->get();
        return view('libros.listado',['book'=> $libros]);
    }
}
