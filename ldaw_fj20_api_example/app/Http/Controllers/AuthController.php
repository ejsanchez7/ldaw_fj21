<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Se importa el modelo de usuario para usar sus métodos en la autenticación
use App\Models\User;

//Importar la clase HASH para manejar el hasheo de contraseñas
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{

    //Login con sanctum
    function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || !Hash::check($request->password, $user->password)){
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return [
                "token" => $user->createToken($request->device_name)->plainTextToken
            ];
    }

    //Devuelve el usuario autenticado
    public function getUser(Request $request){

        $user = $request->user();

        return [
            "email" => $user->email,
            "name" => $user->name,
            "role" => $user->role->name,
            "privileges" => $user->getPrivilegesList()
        ];

    }

    //Logout con sanctum
    function logout(Request $request){
        // Revoke all tokens...
        $request->user()->tokens()->delete();
    }

}
