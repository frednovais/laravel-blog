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







Route::get('/contacto', function () {
    return view('contactoform');
});

Route::get('/contacto2', function () {
    return view('contacto.form');
});



Route::get('/pesquisa', function () {
    return view('pesquisa');
});

Route::post('/pesquisa', function () {
    return view('pesquisaresult', ['texto' => $_POST["name"]]);
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('wecolmename', ['name' => 'João']);
});



Route::get('/login', function () {
    return 'Formulario de Login';
});

Route::post('/login', function () {
    return 'Login Efetuado!';
});

// Route::group(["prefix" => "noticias"], function () {

//     Route::get('/', function () {
//         return 'Home das Notícias';
//     });

//     Route::get('/desporto', function () {
//         return 'Desporto';
//     });

//     Route::post('/porto', function () {
//         return 'Noticias do Porto !';
//     });
// });


Route::get('/registo', function () {
    return 'Registo';
});

Route::get('/search1', function () {
    return view("pesquisa");
});

Route::post('/search1', function () {
    return view("pesquisaresult", ['texto' => $_POST["name"]]);//'<div> Pesquisa por : '..'</div>';
});

Route::get('/noticias/{id}', function ($id) {
    return "Noticia apenas com ID $id ";
});

Route::get('/noticias/{id}/{titulo}', function ($id , $titulo) {
    return "Noticia com ID $id e titulo $titulo";
});


Route::get('/search', "SearchController@index");

Route::post('/search', "SearchController@pesquisa");


// Route::get('/noticias', function () {

//     $links = ["Desporto", "Tempo", "Porto", "Braga"];

//     return view("noticias", compact("links"));
// });

Route::get('/noticias',"NoticiasController@index");

// Rota para pegar o valor da variavel no arquivo .env
Route::get('/model-env',"EnvController@index");

// Exibe o Form para criar o Post
Route::get('/post-create',"PostController@create");

// Processa o form
Route::post('/post-store',"PostController@store");

// Lista os post registados
Route::get('/post-index',"PostController@index");

// Detalhe de Post
Route::get('/post-show/{id}',"PostController@show");

// Edição de Post
Route::get('/post-edit/{id}',"PostController@edit");

// Update de Post
Route::post('/post-update/{id}',"PostController@update");