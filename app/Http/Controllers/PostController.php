<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // Busca todos os registos no Model
        $posts = Post::all();
        
        // Passa os registos para a View
        return view("post.index",["posts" => $posts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // Retorna a View
        return view("post.form");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Faz a criação do registro na Model
        Post::create([
            'titulo'        => $request->titulo,
            'texto'         => $request->texto,
            'likes'         => 1
        ]);

        // Retorna a View com a mensagem
        return view("model-env", ["texto" => ("Post Criado")]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Vai no Model buscar o registo de acordo com criterio
        $post = Post::where("id", "=", $id)->first();

        // Manda o objeto para a View para renderizar para o utilizador
        return view("post.show", ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Vai no Model buscar o registo de acordo com criterio
        $post = Post::where("id", "=", $id)->first();

        // Manda o objeto para a View para renderizar para o utilizador
        return view("post.editform", ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Busca o registo na Model
        $post = Post::find($id);

        // FAz as alterações no objecto
        $post->titulo = $request->titulo;
        $post->texto  = $request->texto;

        // Salva as alterações no objecto
        $post->save();

        // Retorna a lista
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // Busca o registo na Model
        $post = Post::find($id);

        // Faz o Delete
        $post->forceDelete();

        // Retorna a lista
        return $this->index();
    }

    public function home()
    {

        // Busca todos os registos no Model
        $posts = Post::all();
        
        // Passa os registos para a View
        return view("post.home",["posts" => $posts]);

    }

    public function homecomsql()
    {

        // Busca todos os registos no BAnco com comando SQL normal
        $posts = DB::select(
            DB::raw('SELECT * FROM posts')
        );
        
        // Passa os registos para a View
        return view("post.home",["posts" => $posts]);

    }


    public function search(Request $request)
    {

        // Busca todos os registos no Model
        $posts = DB::table('posts')
                    ->where('texto', 'like', "%{$request->pesquisa}%")
                    ->get();
        
        // Passa os registos para a View
        return view("post.home",["posts" => $posts, "pesquisa" => $request->pesquisa]);

    }

    public function softdelete($id)
    {

        // Busca o registo na Model
        $post = Post::find($id);

        // Faz o Delete
        $post->delete();

        // Retorna a lista
        return $this->index();
    }
    
}
