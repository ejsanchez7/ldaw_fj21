<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Importar la base de datos
use Illuminate\Support\Facades\DB;

class AuthorBookSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table("authors_books")->insert([
            ["author_id" => 1, "book_id" => 1],
            ["author_id" => 2, "book_id" => 2],
        ]);

    }
}
