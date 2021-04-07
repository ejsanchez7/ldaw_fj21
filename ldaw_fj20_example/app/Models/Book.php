<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

//Importar el cliente de HTTP
use Illuminate\Support\Facades\Http;

//class Book extends Model{
class Book{

    public static function getBooks(){
        //Consulta a la API
        //localhost:8001/api/books
        $response = Http::get(api_route('books'));
        //Devolver el resultado como un arreglo de PHP
        return $response->json();
    }

    public static function getBook($id){

        $response = Http::get(api_route('books') . "/$id");
        //Devolver el resultado como un arreglo de PHP
        return $response->json();

    }

}
