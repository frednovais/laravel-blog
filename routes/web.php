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
        return "Home das noticias <br><a href=/noticias/desporto>Rota para Desporto</a><br><a href=/noticias/porto>Rota para Porto</a><br>";
    });

    // http://127.0.0.1:8000/noticias/desporto/
    Route::get('/desporto', function () {
        return "Noticias sobre Desporto";
    });
    
    // http://127.0.0.1:8000/noticias/porto/
    Route::get('/porto', function () {
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

//http://127.0.0.1:8000/parameter
Route::get('/parameter', function () {
    return view('wecolmename', ['name' => 'João']);
});



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




Route::get('/login1', function () {
    return 'Formulario de Login';
});

Route::post('/login1', function () {
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




Route::get('/search', "SearchController@index");

Route::post('/search', "SearchController@pesquisa");


// Route::get('/noticias', function () {

//     $links = ["Desporto", "Tempo", "Porto", "Braga"];

//     return view("noticias", compact("links"));
// });

//Route::get('/noticias',"NoticiasController@index");

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

// Delete de Post
Route::get('/post-delete/{id}',"PostController@destroy");