@extends("layouts.app")

@section("content")
<form action="search" method="post">
    {{ csrf_field() }}
    Pesquisa de nome: <input type="text" name="name" />
    <input type="submit" value="Add"/>
</form>
@endsection
