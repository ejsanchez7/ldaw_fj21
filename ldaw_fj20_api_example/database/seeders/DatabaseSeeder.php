<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

        $this->call([
            //Tablas sin llaves foráneas
            PublisherSeeder::class,
            CountrySeeder::class,
            LanguageSeeder::class,
            //Tablas con llaves foráneas
            BookSeeder::class,
            AuthorSeeder::class,
            //Tablas pivote
            AuthorBookSeeder::class,
        ]);

    }
}
