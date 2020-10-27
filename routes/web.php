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
Route::get('/repostulante', function () {
    return view('home');
})->middleware('auth');
Route::get('/antiguo', function () {
    return view('home');
})->middleware('auth');
Route::get('/nuevo', function () {
    return view('home');
})->middleware('auth');
Route::get('/comunicados', function () {
    return view('home');
})->middleware('auth');

Auth::routes();
Route::apiResource('/comunicado',\App\Http\Controllers\ComunicadoController::class);
Route::get('/mostrar',[\App\Http\Controllers\ComunicadoController::class,'mostrar']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
