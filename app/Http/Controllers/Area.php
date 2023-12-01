<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class Area extends Controller
{
    public function areas_listado(){
        $areas = DB :: table ('areaconocimiento')->get();
        return view('areas.listado',['area'=> $areas]);
    }
}
