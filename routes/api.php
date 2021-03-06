<?php

use Illuminate\Http\Request;

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

// TODO: Crear los resources para las respuestas
//      php artisan make:resource Trainer
//      php artisan make:resource TrainerCollection
//      php artisan make:resource Pokemon
//      php artisan make:resource PokemonCollection
