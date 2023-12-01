<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class AreaConocimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos=[
            [
                'idArea' => '10',
                'descripcion' => 'Ciencias Naturales'
            ],
            [
                'idArea' => '12',
                'descripcion' => 'Ciencias Humanas, Sociales y Jurídicas'
            ],
            [
                'idArea' => '14',
                'descripcion' => 'Artes'
            ],
            [
                'idArea' => '16',
                'descripcion' => 'Ciencias de la Salud'
            ],
            [
                'idArea' => '18',
                'descripcion' => 'literatura'
            ],
            [
                'idArea' => '20',
                'descripcion' => 'Gastronomia y Cocina'
            ]
        ];
        DB::table('areaConocimiento')->insert($datos);
    }
}
