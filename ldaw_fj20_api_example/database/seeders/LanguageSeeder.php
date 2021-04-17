<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //Crear manualmente los registros para los idiomas
        DB::table("languages")->insert([
            ["id" => 1, "name" => "Español"],
            ["id" => 2, "name" => "Inglés"],
            ["id" => 3, "name" => "Francés"]
        ]);
    }
}
