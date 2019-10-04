<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //SearchController@index
    
    public function index(){
        
        return view("searchform");
        
    }
    
    public function pesquisa(){

        return view("pesquisaresult", ['texto' => $_POST["q"]]);
        
    }
}
