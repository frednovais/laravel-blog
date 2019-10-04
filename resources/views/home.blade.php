@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    Hello, {{ $name }}.
    <a href="/login">Login</a>
    <a href="/registo">Registo</a>
@endsection
