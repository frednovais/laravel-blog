@extends("layouts.app")

@section("content")
    <H1>Noticias</H1>
    <div>{{$title}}</div>
    
    <H1>Confira tambem</H1>
    @if(count($links))
        @foreach($links as $link)
            <li><a href="{{$link}}">{{$link}}</a></li>
        @endforeach
    @endif
@endsection