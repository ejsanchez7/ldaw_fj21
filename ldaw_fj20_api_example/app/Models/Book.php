<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model{

    use HasFactory;

    //Esto debería moverse al modelo posteriormente
    private static function readBooks(){
        //Generar el path al archivo
        $filePath = storage_path("app/json/books.json");

        //Cargar el archivo
        if($fileContents = file_get_contents($filePath)){
            //Transformarlo a una estructura de datos
            return json_decode($fileContents,true);
        }

        return [];
    }

    //Obtiene el listado de libros y los devuelve como un arreglo arreglo
    public static function getAllBooks(){

        return self::readBooks();

    }

    //Encuentra un libro por ID
    public static function getBook($id){

        $books = self::readBooks();

        return isset($books[$id]) ? $books[$id] : null;

    }

}
