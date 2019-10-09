<?php

/*

Slide disponivel no seguinte endereço: 

https://docs.google.com/presentation/d/1YZfe2zRLgSRN6M9GRlsl7S9LGNsUewEx7xbcqMBNtoE/edit?usp=sharing

*/

// Slide 71 ou 76 - Rotas
//http://127.0.0.1:8000/login/
Route::get('/login', function(){
    return "Login";
});

Route::post('/login', function(){
    return "Logado";
});


// Slide 77 - Rotas Agrupadas
Route::group(["prefix" => "noticias"], function () {
    
    // http://127.0.0.1:8000/noticias/
    Route::get('/', function () {
        return "Home das noticias <br><a href=/noticias/Desporto>Rota para Desporto</a><br><a href=/noticias/Porto>Rota para Porto</a><br>";
    });

    // http://127.0.0.1:8000/noticias/desporto/
    Route::get('/Desporto', function () {
        return "Noticias sobre Desporto";
    });
    
    // http://127.0.0.1:8000/noticias/porto/
    Route::get('/Porto', function () {
        return "Noticias sobre o Porto";
    });

});

// Slide 79 - Rotas com parametros
//http://127.0.0.1:8000/noticia/123
Route::get('/noticia/{id}', function ($id) {
    return "Noticia apenas com ID $id ";
});

//http://127.0.0.1:8000/noticia/123/titulo
Route::get('/noticia/{id}/{titulo}', function ($id , $titulo) {
    return "Noticia com ID $id e titulo $titulo";
});


// Slide 85 - View usando Blade

//http://127.0.0.1:8000/home
Route::get('/home', function () {
    return view('home');
});

//http://127.0.0.1:8000/
Route::get('/', function () {
    return view('welcome');
});

// Slide 87 - View usando Blade e enviado parametro para View

//http://127.0.0.1:8000/parameter
Route::get('/parameter', function () {
    return view('wecolmename', ['name' => 'João']);
});

// Slide 90 - View usando Blade em diretorios diferentes

//http://127.0.0.1:8000/contacto
Route::get('/contacto', function () {
    return view('contactoform');
});

//http://127.0.0.1:8000/contacto2
Route::get('/contacto2', function () {
    return view('contacto.form');
});


// Slide 95 - CSRF Protection em Forms

//http://127.0.0.1:8000/pesquisa
Route::get('/pesquisa', function () {
    return view('pesquisa');
});

Route::post('/pesquisa', function () {
    return view('pesquisaresult', ['texto' => $_POST["name"]]);
});


// Slide 97 - Exercicio
//http://127.0.0.1:8000/search
Route::get('/search', function () {
    return view("searchform");
});

Route::post('/search', function () {
    return view("searchresult", ['q' => " asds das".$_POST["q"]]);//'<div> Pesquisa por : '..'</div>';
});

// Slide 108, 112, 113 e 114 Foreach, comentários e codigo PHP no Blade

//http://127.0.0.1:8000/homenoticias
Route::get('/homenoticias', function () {

    $links = ["Desporto", "Tempo", "Porto", "Braga"];

    return view("noticias", compact("links"));
});

// Slide 117 Rotas com Controller e Exercicio Slide 124

//http://127.0.0.1:8000/searchcontroller
Route::get('/searchcontroller', "SearchController@index");
Route::post('/searchcontroller', "SearchController@pesquisa");

// Slide 123 Rotas com Controller
Route::get('/noticiascontroller',"NoticiasController@index");

// Slide 132
// Rota para pegar o valor da variavel no arquivo .env
Route::get('/model-env',"EnvController@index");

// Slide 157
// Exibe o Form para criar o Post
Route::get('/post-create',"PostController@create");

// Slide 161
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

// Delete de Post
Route::get('/post-delete/{id}',"PostController@destroy");