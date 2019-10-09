@extends("layouts.app")

@section("content")
<form action="pesquisa" method="post">
    {{ csrf_field() }}
    <h2>Formulatio com uso de CSRF Protection</h2>
    Pesquisa de nome: <input type="text" name="name" />
    <input type="submit" value="Add"/>
</form>
@endsection
