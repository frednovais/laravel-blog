@extends("layouts.app")

@section("content")
    <H1>Blog do Laravel</H1>
    @isset($pesquisa) 
        <H4>resultado da pesquisa ({{$pesquisa}})</H4>
        <H4>Total de ({{count($posts)}})</H4>
    @endisset
    <table style="width:50%; text-align: left;">
        <tr>
            <td style="width:80%; text-align: left;">
    @if(count($posts))
        @foreach($posts as $post)
                <h3>{{$post->titulo}}</h3>
                <div>{{$post->texto}}</div>
        @endforeach
    @endif
            </td>
            <td style="width:20%; text-align: left;">
                <form action="/pesquisablog" method="post">
                    <!-- 
                        csrf_field() Sempre usar para o Laravel validar o token no post
                    --> 
                    {{ csrf_field() }}
                    Pesquisa: 
                    <input 
                            type="text" 
                            name="pesquisa" 
                        @isset($pesquisa) 
                            value="{{$pesquisa}}"
                        @endisset
                    />
                    <input type="submit" />
                </form>
            </td>
        </tr>
    </table>
@endsection


