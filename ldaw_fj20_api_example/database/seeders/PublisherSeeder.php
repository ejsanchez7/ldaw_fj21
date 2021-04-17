<?php

namespace Database\Seeders;

//Importar la base de datos
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        //Crear manualmente los registros
        DB::table('publishers')->insert([
            ["id" => 1, "name" => "Alfaguara"],
            ["id" => 2, "name" => "SEP"],
            ["id" => 3, "name" => "Porrúa"],
            ["id" => 4, "name" => "Salamandra"],
        ]);

    }
}
