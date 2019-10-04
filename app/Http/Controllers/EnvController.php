<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvController extends Controller
{
    //
    public function index(){

        // Lembre de colocar no .env
        // CUSTOM_VARIAVEL="Senha ultra secreta!"
        return view("model-env", ["texto" => env("CUSTOM_VARIAVEL")]);
    }
}
