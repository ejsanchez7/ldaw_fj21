<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table("users")->insert([
            [
                "name" => "Erik Sánchez",
                "email" => "ejsanchez@tec.mx",
                "password" => Hash::make("abc123"),
                //"role_id" => 2
            ],
            [
                "name" => "Usuario",
                "email" => "user@tec.mx",
                "password" => Hash::make("abc123"),
                //"role_id" => 1
            ]
        ]);
    }
}
