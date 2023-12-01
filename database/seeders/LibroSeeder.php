<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'ISBN' => '97884',
                'nombre' => 'Trópico de Cancer',
                'descripcion' => 'crea un monologo',
                'generoLiterario' => 'dramaturgia',
                'precioUnitario' => '120.000',
                'observacion' => 'usado',
                'foto' => 'Foto ',
                'Area' => 18
            ],
            [
                'ISBN' => '92284',
                'nombre' => 'El Cerebro',
                'descripcion' => 'conocimientos básicos',
                'generoLiterario' => 'didactico',
                'precioUnitario' => '180.000',
                'observacion' => 'nuevo',
                'foto' => 'Foto ',
                'Area' => 16
            ],
            [
                'ISBN' => '97855',
                'nombre' => 'Cocina Básica',
                'descripcion' => 'recetas faciles',
                'generoLiterario' => 'didactico',
                'precioUnitario' => '40.000',
                'observacion' => 'usado',
                'foto' => 'Foto ',
                'Area' => 20
            ],
            [
                'ISBN' => '32884',
                'nombre' => 'Nietzche',
                'descripcion' => 'El hombre',
                'generoLiterario' => 'narrativo',
                'precioUnitario' => '90.000',
                'observacion' => 'nuevo',
                'foto' => 'Foto ',
                'Area' => 18
            ],
            [
                'ISBN' => '45764',
                'nombre' => 'Derecho y Sociedad',
                'descripcion' => 'Lo que debe saber',
                'generoLiterario' => 'literatura',
                'precioUnitario' => '70.000',
                'observacion' => 'usado',
                'foto' => 'Foto ',
                'Area' => 12
            ]
        ];
        DB::table('libro')->insert($datos); 
    }
}
