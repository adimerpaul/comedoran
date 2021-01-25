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
Route::apiResource('/comunicado',\App\Http\Controllers\ComunicadoController::class)->middleware('auth');
Route::apiResource('/repostulante',\App\Http\Controllers\RepostulanteController::class)->middleware('auth');
Route::apiResource('/nuevo',\App\Http\Controllers\NuevoController::class)->middleware('auth');
Route::apiResource('/antiguo',\App\Http\Controllers\AntiguoController::class)->middleware('auth');

Route::apiResource('/ficha',\App\Http\Controllers\FichaController::class)->middleware('auth');
Route::apiResource('/gestion',\App\Http\Controllers\GestionController::class)->middleware('auth');
Route::get('/mostrar',[\App\Http\Controllers\ComunicadoController::class,'mostrar'])->middleware('auth');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth')->$this->middleware('auth);
Route::post('/guardar',[\App\Http\Controllers\FichaController::class,'guardar'])->middleware('auth');
Route::post('/antiguog',[\App\Http\Controllers\AntiguoController::class,'store'])->middleware('auth');
