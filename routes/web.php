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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/news', function () {
    $links = ["Desporto","Porto","Aveiro"];
    return view('news', compact("links"));
});

Route::get('/noticias',"NoticiasController@index");

Route::get('/news/{title}', function ($title) {
    $links = ["Desporto","Porto","Aveiro"];
    return view('newstitle', ["links" => $links, "title" => $title]);
});
/*
Route::get('/contacto', function () {
    return "Sitio de Contacto";
});
*/

Route::get('/ola', function () {
    return view('welcomename',["name" => "João do HTML"]);
});

Route::get('/contacto', function () {
    return view('contactoform');
});

Route::get('/contacto2', function () {
    return view('contacto.form');
});

Route::post('/contacto2', function () {
    return view('contacto.form');
});


Route::get('/search', function () {
    return view('searchform');
});

Route::post('/search', function () {
    return view('searchresult', ["q" => $_POST["q"]]);
});