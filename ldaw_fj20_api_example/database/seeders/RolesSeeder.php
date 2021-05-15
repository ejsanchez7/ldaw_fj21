<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        //Alta de los roles
        DB::table("roles")->insert([
            ["id" => 1, "name" => "user"],
            ["id" => 2, "name" => "admin"]
        ]);

        //Asociación de los roles con sus privilegios
        DB::table("privileges_roles")->insert([
            //User
            ["id" => 1, "role_id" => 1, "privilege_id" => 5],
            ["id" => 2, "role_id" => 1, "privilege_id" => 2],
            //Admin
            ["id" => 3, "role_id" => 2, "privilege_id" => 1],
            ["id" => 4, "role_id" => 2, "privilege_id" => 2],
            ["id" => 5, "role_id" => 2, "privilege_id" => 3],
            ["id" => 6, "role_id" => 2, "privilege_id" => 4],
            ["id" => 7, "role_id" => 2, "privilege_id" => 5]
        ]);

    }
}
