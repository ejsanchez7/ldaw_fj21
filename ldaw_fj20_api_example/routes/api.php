<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\BookController;

Route::apiResource("books", BookController::class);

use App\Models\User;

//Login de sanctum para devolver token
Route::post("/login",function(Request $request){

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


});

//Devuelve el usuario
Route::middleware('auth:sanctum')->get('/user', function(Request $request){

    $user = $request->user();

    return [
        "email" => $user->email,
        "name" => $user->name,
        //"role" => $user->role->name,
        //"privileges" => $user->getPrivilegesList()
    ];

});

//NOTE: logout de sanctum
Route::middleware('auth:sanctum')->get("/logout",function(Request $request){
    // Revoke all tokens...
    $request->user()->tokens()->delete();
});
