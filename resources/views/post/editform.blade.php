@extends("layouts.app")

@section("content")
    {{-- This comment will not be present in the rendered HTML --}}
    <!-- This comment will not be present in the rendered HTML -->


    <h1>Editar Post</h1>
    <!-- 
        TAG FORM

        action > rota que vai processa o form
        method > Verbo que vai ser enviada a informação
    -->
    <form action="/post-update/{{$post->id}}" method="POST">
        <!-- 
            csrf_field() Sempre usar para o Laravel validar o token no post
        --> 
        {{ csrf_field() }}
        <input type="text" name="titulo" placeholder="insira o titulo" value="{{$post->titulo}}"/><br />
        <input type="text" name="texto" placeholder="insira o texto" value="{{$post->texto}}"/><br />
        <br />
        <input type="submit" />
    </form>
@endsection
