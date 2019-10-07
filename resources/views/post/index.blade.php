@extends("layouts.app")

@section("content")
    <H1>Posts Cadastrados</H1>
    @if(count($posts))
        @foreach($posts as $post)
            <li><a href="">{{$post->titulo}}</a></li>
        @endforeach
    @endif
@endsection