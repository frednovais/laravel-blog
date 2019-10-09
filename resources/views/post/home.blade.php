@extends("layouts.app")

@section("content")
    <H1>Blog do Laravel</H1>
    <table>
        <tr>
            <td>
    @if(count($posts))
        @foreach($posts as $post)
                <h3>{{$post->titulo}}</h3>
                <div>{{$post->texto}}</div>
        @endforeach
    @endif
            </td>
            <td>
                <!-- Pesquisa: <input  -->
            </td>
        </tr>
    </table>
@endsection