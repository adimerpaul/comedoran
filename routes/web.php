<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->middleware('auth');
Route::get('/vrepostulante', function () {
    return view('home');
})->middleware('auth');
Route::get('/vantiguo', function () {
    return view('home');
})->middleware('auth');
Route::get('/vnuevo', function () {
    return view('home');
})->middleware('auth');
Route::get('/comunicados', function () {
    return view('home');
})->middleware('auth');
Route::get('/gestiones', function () {
    return view('home');
})->middleware('auth');
Route::get('/registros', function () {
    return view('home');
})->middleware('auth');


Auth::routes();
Route::group(['middleware'=>'auth'],function (){
    Route::apiResource('/comunicado',\App\Http\Controllers\ComunicadoController::class);
    Route::apiResource('/repostulante',\App\Http\Controllers\RepostulanteController::class);
    Route::apiResource('/nuevo',\App\Http\Controllers\NuevoController::class);
    Route::apiResource('/antiguo',\App\Http\Controllers\AntiguoController::class);
    Route::get('/buscar/{id}',[\App\Http\Controllers\AntiguoController::class,'buscar']);
    Route::apiResource('/ficha',\App\Http\Controllers\FichaController::class);
    Route::apiResource('/gestion',\App\Http\Controllers\GestionController::class);
    Route::get('/mostrar',[\App\Http\Controllers\ComunicadoController::class,'mostrar']);
    Route::post('/guardar',[\App\Http\Controllers\FichaController::class,'guardar']);
    Route::post('/antiguog',[\App\Http\Controllers\AntiguoController::class,'store']);
    Route::get('/revisarn',[\App\Http\Controllers\HomeController::class,'revisarn']);
    Route::get('/revisara',[\App\Http\Controllers\HomeController::class,'revisara']);
    Route::get('/revisarr',[\App\Http\Controllers\HomeController::class,'revisarr']);
});










