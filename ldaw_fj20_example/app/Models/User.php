<?php

namespace App\Models;

//NOTE: Debe implementar esta interfaz para que se pueda integrar con el sistema
//de autenticación de laravel
use Illuminate\Contracts\Auth\Authenticatable;

//Cliente HTTP de Laravel para solicitar datos a la API
use Illuminate\Support\Facades\Http;


class User implements Authenticatable{

    /*
    NOTE: Propiedades que necesitamos del usuario
    */
    public $email = null;
    public $name = null;
    public $role = null;
    public $privileges = [];
    public $token = null;

    /*********************************************
    NOTE: Métodos desarrollados para este modelo
    **********************************************/

    public function revokeToken(){

        //obtener los datos del usuario desde la API
        $response = HTTP::withToken($this->token)
                        ->timeout(env("API_TIMEOUT"))
                        ->get(api_route("logout"));

        //dd($response->body());

        return $response->successful();

    }


    /*****************************************************
    NOTE: Métodos estáticos desarrollados para este modelo
    ******************************************************/

    //Solicita el usuario logueado a la API usando el token registrado en la sesión
    public static function requestUser($token){

        //obtener los datos del usuario desde la API
        $response = HTTP::withToken($token)
                        ->timeout(env("API_TIMEOUT"))
                        ->get(api_route("user"));

        //dd($response->body());

        if($response->successful()){
            //Crear la instancia del usuario y devolverla
            $userData = $response->json();

            $user = new User;

            $user->email = $userData["email"];
            $user->name = $userData["name"];
            $user->role = $userData["role"];
            $user->privileges = $userData["privileges"];
            $user->token = $token;

            return $user;

        }

        return null;

    }


    /*********************************************************************
    NOTE: métodos que se tienen que implementar debido a "Authenticatable"
    **********************************************************************/

    public function getAuthIdentifierName(){
        return "token";
    }

    public function getAuthIdentifier(){
        return $this->token;
    }

    public function getAuthPassword(){
        return $this->token;
    }

    public function getRememberToken(){
        return null;
    }

    public function setRememberToken($value){

    }

    public function getRememberTokenName(){
        return null;
    }

}
