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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

 // Route::view('/jogos', 'jogos');

 /*
 Route::get('/jogos', function () {
    return "Curso Laravel";
 });

 */

/*
 Route::view('/jogos', 'jogos', ['name' => 'Aprendendo Laravel']);
 */

 /*
 Route::get('/jogos/{name?}', function($name = null){
     return view('jogos', ['nomeJogos'=>$name]);
 })->where('name', '[A-Za-z]+');

 */

 /*
Route::get('/jogos/{id?}', function($id = null){
    return view('jogos', ['idJogos'=>$id]);
})->where('id', '[0-9]+');
*/

/*
Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
    return view('jogos', ['idJogos'=>$id, 'nomeJogos'=>$name]);
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
*/

Route::get('/jogos', function () {
    return view('jogos');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');

Route::Fallback(function(){
    return "Erro ao localizar a rota!";
});

