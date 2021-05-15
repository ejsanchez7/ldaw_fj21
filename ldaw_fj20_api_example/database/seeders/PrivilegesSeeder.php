<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

class PrivilegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table("privileges")->insert([
            ["id" => 1, "name" => "create_books"],
            ["id" => 2, "name" => "view_books"],
            ["id" => 3, "name" => "update_books"],
            ["id" => 4, "name" => "delete_books"],
            ["id" => 5, "name" => "create_loans"]
        ]);

    }
}
