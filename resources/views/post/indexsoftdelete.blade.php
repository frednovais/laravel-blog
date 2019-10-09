@extends("layouts.app")

@section("content")
    <H1>Posts com SoftDelete</H1>
    @if(count($posts))
        <ul>
        @foreach($posts as $post)
            <li>
                <a href="/post-show/{{$post->id}}">{{$post->titulo}}</a>
                <a href="/post-delete/{{$post->id}}">deletar de vez</a> 
                <a href="/post-softdelete/{{$post->id}}">recuperar</a>
            </li>
        @endforeach
        </ul>
    @endif
@endsection