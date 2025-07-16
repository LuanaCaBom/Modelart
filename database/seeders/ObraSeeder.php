<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        Obra::create([
            'nomeObra' => '',
            'artistaObra' => '',
            'tipoObra' => '',
            'estiloObra' => '',
            'imagemObra' => '',
            'dataObra' => '',

        ],[
            'nomeObra' => '',
            'artistaObra' => '',
            'tipoObra' => '',
            'estiloObra' => '',
            'imagemObra' => '',
            'dataObra' => '',
        ],[
            'nomeObra' => '',
            'artistaObra' => '',
            'tipoObra' => '',
            'estiloObra' => '',
            'imagemObra' => '',
            'dataObra' => '',
        ],[
            'nomeObra' => '',
            'artistaObra' => '',
            'tipoObra' => '',
            'estiloObra' => '',
            'imagemObra' => '',
            'dataObra' => '',
        ]);
    }
}
