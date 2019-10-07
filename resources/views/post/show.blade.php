@extends("layouts.app")

@section("content")
    <H1>Post Detalhado</H1>
    <H1>{{$post->titulo}}</H1>
    <H3>{{$post->texto}}</H3>
@endsection