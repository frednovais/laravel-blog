@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h1>Ficheiro home.blade.php</h1>
    @isset($name)
    Hello, {{ $name }}.
    @endisset
    <a href="/login">Login</a>
    <a href="/registo">Registo</a>
@endsection
