<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\libro;
use App\Http\Controllers\Area;
use App\Http\Controllers\Libreria;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('libreria.index');
});

Route::get('/Santiago/libros',[Libro::class, 'libros_listado']);
Route::get('/Santiago/areas',[Area::class, 'areas_listado']);
Route::get('/Santiago/presentacion',[Libreria::class, 'librerias']);
