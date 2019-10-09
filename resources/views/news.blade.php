@extends("layouts.app")

@section("content")
    <H1>Noticias</H1>
    @if(count($links))
        @foreach($links as $link)
            <li><a href="noticias/{{$link}}">{{$link}}</a></li>
        @endforeach
    @endif
@endsection