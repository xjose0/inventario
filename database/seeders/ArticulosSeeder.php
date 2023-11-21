<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articulo;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Articulo::create([
            'nombre' => 'Escalera verde',
            'descripcion' => '',
            'cantidad' => 1,
            'anaquel' => 1,
        ]);
    }
}
