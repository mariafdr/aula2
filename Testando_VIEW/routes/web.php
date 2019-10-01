<?php

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

use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/boaTarde', function (Request $req) {
    return "Boa Tarde, $req->nome!";
});

/*
Route::get('/boaTarde/{nome}/{idade?}', function ($nome, $idade=null) {
    if($idade) {
        return "Boa Tarde, $nome! Você tem $idade anos! Velhaaaa";    
    }
    return "Boa Tarde, $nome! Você continua linda!";
});
*/

Route::get('/boaTarde/{nome}/{idade?}', function ($nome, $idade=null) {

    $tabela = [
        ['nome'=>'Cecilia', 'idade'=>'34'],
        ['nome'=>'Maria Fernanda', 'idade'=>'35'],
        ['nome'=>'Michelle', 'idade'=>'21'],
        ['nome'=>'Claudia', 'idade'=>null],
        ['nome'=>'Wallace', 'idade'=>'43'],
        ['nome'=>'Glauber', 'idade'=>'32'],
        ['nome'=>'Luiz', 'idade'=>'35'],
        ['nome'=>'Aldo', 'idade'=>'42']
    ];

    // return view('boaTarde', ['nome'=>$nome, 'idade'=>$idade]);
    return view('boaTarde', compact('nome', 'idade', 'tabela'));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
