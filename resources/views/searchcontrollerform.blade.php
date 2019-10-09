@extends("layouts.app")

@section('content')
<form action="searchcontroller" method="post">
    {{csrf_field()}}
    pesquisa: <input type="text" name="q" /> <br />
    <input type="submit" />
</form>
@endsection