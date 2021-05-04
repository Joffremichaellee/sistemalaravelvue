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

Route::get('/', ['as' => 'inicio', function () {
    return view('contenido/contenido');
}]);

Route::get('/categoria',['as'=>'categoriaindex','uses'=> 'CategoriaController@index']);

Route::get('/categoria/nuevacategoria',['as'=>'createcategoria','uses'=> 'CategoriaController@create']);
Route::post('/categoria/storecategoria', 'CategoriaController@store');


//Route::get('/categorias', 'CategoriaController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
