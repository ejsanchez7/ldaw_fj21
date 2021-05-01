<?php

namespace App\Providers;

/*
NOTE: Algunos métodos de esta clase deben devolver un modelo de usuario que
implemente la interfaz "Authenticatable"
*/
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;
use App\Models\User;

//Cliente HTTP de Laravel para solicitar datos a la API
use Illuminate\Support\Facades\Http;


class ApiUserProvider implements UserProvider{


    public function retrieveById($identifier){

        return User::requestUser($identifier);

    }

    public function retrieveByToken($identifier, $token){

        return User::requestUser($token);

    }

    public function updateRememberToken(Authenticatable $user, $token){

    }

    public function retrieveByCredentials(array $credentials){

        /*
        NOTE: No hay usuario por recuperar ya que este se recupera hasta que se
        tiene el token, devolver un usuario vacío
        */

        return new User;

    }

    public function validateCredentials(Authenticatable $user, array $credentials){

        //Hacer la petición para recuperar el token al backend (sanctum/API)
        $response = HTTP::timeout(env("API_TIMEOUT"))
                        ->post(api_route("login"), [
                            "email" => $credentials["email"],
                            "password" => $credentials["password"],
                            "device_name" => "frontend"
                        ]);

        if($response->successful()){

            $data = $response->json();

            if(isset($data["token"])){

                $user->token = $data["token"];

                //Recuperar los datos del usuario usando el token
                $userData = User::requestUser($data["token"]);

                //Si el usuario existe
                if(!empty($userData)){
                    return true;
                }

            }

        }

        return false;


    }


}
