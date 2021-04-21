<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Importar la facade para la clase DB
use Illuminate\Support\Facades\DB;

class BookQueryBuilder extends Model{

    use HasFactory;

    /*
    Extrae el listado de libros de la BD usando el QueryBuilder y los devuelve en
    un arreglo con el formato requerido por el Controller
    */
    public static function getAllBooks(){

        $query = DB::table("books as b")
                    ->select("b.isbn","b.title","a.first_name","a.last_name","a.second_last_name")
                    ->join("authors_books as ab","b.id","=","ab.book_id")
                    ->join('authors as a','ab.author_id', '=', 'a.id')
                    ->orderBy("b.title","asc");

        $result = $query->get();

        $books = [];

        foreach($result as $book){

            if(!isset($books[$book->isbn])){

                $books[$book->isbn] = [
                    "isbn" => $book->isbn,
                    "title" => $book->title,
                    "authors" => [
                        trim(implode(" ", [$book->first_name,$book->last_name,$book->second_last_name]))
                    ]
                ];

            }
            else{
                $books[$book->isbn]["authors"][] = trim(implode(" ", [$book->first_name,$book->last_name,$book->second_last_name]));
            }

        }

        //dd($books);

        return $books;

    }

    //Devuelve los autores de un libro
    public static function getAuthors($bookId){

        $authors = DB::table("authors as a")->select("a.*")
                    ->join("authors_books as ab","ab.author_id","=","a.id")
                    ->where("ab.book_id",$bookId)
                    ->get();

        return $authors;

    }

    //Encuentra un libro por ID y lo devuelve en un arreglo buscándolo en la BD usando el Query Builder
    public static function getBook($id){

        $book = DB::table('books')->where('isbn', $id)->first();

        if(!empty($book)){

            $language = DB::table("languages")->find($book->language_id);
            $publisher = DB::table("publishers")->find($book->publisher_id);
            $authors = self::getAuthors($book->id);

            $authorsArray = [];

            foreach($authors as $author){
                $authorsArray[] = trim(implode(" ", [$author->first_name,$author->last_name,$author->second_last_name]));
            }

            return [
                "isbn" => $book->isbn,
                "title" => $book->title,
                "authors" => $authorsArray,
                "categories" => [],
                "summary" => $book->summary,
                "edition" => $book->edition,
                "publisher" => $publisher->name,
                "language" => $language->name
            ];

        }

        return null;

    }

}
