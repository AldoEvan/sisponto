<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\UserController;
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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

//Route::post('auth/login', 'AuthController@login');



Route::group(['middleware' => ['validacaoJWT']], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::post('auth/logout', 'logout');
    });

    Route::controller(ColaboradorController::class)->group(function () {
        Route::get('colaborador/index', 'index');
        Route::get('colaborador/{id}', 'show');
        Route::post('colaborador/salvar', 'store');
        Route::put('colaborador/alterar/{id}', 'update');
        Route::delete('colaborador/deletar/{id}', 'destroy');

    });

    Route::controller(UserController::class)->group(function () {
        Route::get('usuario/index', 'index');
        Route::get('usuario/{id}', 'show');
        Route::post('usuario/salvar', 'store');
        Route::put('usuario/alterar/{id}', 'update');
        Route::delete('usuario/deletar/{id}', 'destroy');

    });

});

Route::controller(AuthController::class)->group(function () {
    Route::post('auth/', 'login');
    Route::get('auth/verify', 'validaToken');

});
