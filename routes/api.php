<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;
use App\User;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Api usando JsonResource y eloquent*/


Route::get('/user', function () { // Elemento buscado por id dentro de la función find();
    return new UserResource(User::find(1));
});

Route::get('/users', function () {// Listo de usuarios dentro de UserCollection
    return new UserCollection(User::all());
});

