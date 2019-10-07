@extends("layouts.app")

@section("content")
    <H1>Posts Cadastrados</H1>
    @if(count($posts))
        <ul>
        @foreach($posts as $post)
            <li><a href="/post-show/{{$post->id}}">{{$post->titulo}}</a> <a href="/post-edit/{{$post->id}}">editar</a> <a href="/post-delete/{{$post->id}}">deletar</a></li>
        @endforeach
        </ul>
    @endif
    <span> >>> Escolha um link para ir para a rota de detalhe <<<</span>
@endsection