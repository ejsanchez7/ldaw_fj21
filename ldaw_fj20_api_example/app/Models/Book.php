<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model{

    use HasFactory;

    /*******************
        CONFIGURACIÓN
    ********************/

    //Desactivar los timestamps
    //public $timestamps = false;

    /******************
        ASOCIACIONES
    *******************/

    //Un libro puede pertenecer a muchos autores
    public function authors(){
        return $this->belongsToMany(Author::class,"authors_books");
    }

    //Un libro pertenece a una editorial
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    //Un libro está escrito en a un idioma
    public function language(){
        return $this->belongsTo(Language::class);
    }


    /*************
        MÉTODOS
    **************/


    /***********************
        MÉTODOS ESTÁTICOS
    ************************/

    public static function getAllBooks(){

        //$books = self::all();
        $books = self::with("authors:first_name,last_name,second_last_name")
            ->orderBy("title","asc")
            ->get();

        $result = [];

        foreach($books as $book){

            $bookArray = [
                "isbn" => $book->isbn,
                "title" => $book->title,
                "authors" => []
            ];

            foreach($book->authors as $author){
                $bookArray["authors"][] = $author->getFullName();
            }

            $result[$book->isbn] = $bookArray;

        }

        return $result;
    }

}
