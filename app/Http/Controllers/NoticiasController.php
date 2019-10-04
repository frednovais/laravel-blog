<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    function index(){
        $links = ["Desporto", "Tempo", "Porto", "Braga", "Aveiro"];

        return view("noticias", compact("links"));
    }
}
