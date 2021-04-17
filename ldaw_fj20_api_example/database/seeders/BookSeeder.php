<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table("books")->insert([
            [
                "id" => 1,
                "isbn" => "123456",
                "title" => "El Principito",
                "summary" => "Un aviador queda incomunicado en el desierto tras sufrir una avería en su avión a mil millas de cualquier región habitada. Allí se encontrará con un pequeño príncipe de cabellos de oro que afirma vivir en el asteroide B 612 (donde hay una rosa y tres volcanes) con el que no tardará en congeniar. En sus conversaciones, el principito le relatará su visión sobre la vida y la gente, de esa sabiduría que se pierde cuando las personas abandonamos la infancia.",
                "edition" => 1990,
                "publisher_id" => 3,
                "language_id" => 1
            ],
            [
                "id" => 2,
                "isbn" => "348765",
                "title" => "Los Miserables",
                "summary" => "Jean Valjean es un ex-presidiario. Cuando llega al pueblo de D., rumbo a su pueblo natal y presenta su pasaporte -en el que figura como ex-reo y ''hombre peligroso''- en el ayuntamiento, nadie se digna a acogerle y a darle de comer, salvo don Bienvenido, el párroco. Traicionando a su protector, Valjean le roba la cubertería de plata, pero le detienen en los alrededores, llevándole frente al párroco. Don Bienvenido decide no denunciarle, pero le arranca una promesa usar lo que ha tomado para hacerse un hombre de bien.",
                "edition" => 2015,
                "publisher_id" => 1,
                "language_id" => 2
            ],
        ]);

    }
}
