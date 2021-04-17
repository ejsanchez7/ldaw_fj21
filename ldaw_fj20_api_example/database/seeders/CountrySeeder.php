<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //Crear manualmente los registros para los idiomas
        DB::table("countries")->insert([
            ["id" => 1, "name" => "México"],
            ["id" => 2, "name" => "Francia"],
            ["id" => 3, "name" => "Italia"]
        ]);
    }
}
