<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    //
    public function index(){
        $links = ["Desporto","Porto","Aveiro"];
        return view('news', compact("links"));
    }
}
