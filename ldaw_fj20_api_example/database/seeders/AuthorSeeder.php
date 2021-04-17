<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Importar la base de datos
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        //Crear manualmente los registros
        DB::table('authors')->insert([
            [
                "id" => 1,
                "first_name" => "Antoine",
                "last_name" => "de Saint-Exupéry",
                "country_id" => 2, //Francia
            ],
            [
                "id" => 2,
                "first_name" => "Víctor",
                "last_name" => "Hugo",
                "country_id" => 2, //Francia
            ],
            [
                "id" => 3,
                "first_name" => "Alexander",
                "last_name" => "Dumas",
                "country_id" => 2, //Francia
            ],
            [
                "id" => 4,
                "first_name" => "Laura",
                "last_name" => "Esquivel",
                "country_id" => 1, //México
            ],
            [
                "id" => 5,
                "first_name" => "Juana",
                "last_name" => "de Asbaje",
                "country_id" => 1, //México
            ],
            [
                "id" => 6,
                "first_name" => "Dante",
                "last_name" => "Alighieri",
                "country_id" => 3, //Italia
            ]
        ]);

    }
}
