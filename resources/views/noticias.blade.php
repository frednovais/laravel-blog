@extends("layouts.app")

@section("content")
{{-- This comment will not be present in the rendered HTML --}}
<!-- This comment will not be present in the rendered HTML -->


    @php
        echo "<h1>teste</h1>";
    @endphp
    <h1>Noticias</h1>
    @if(count($links))
        <ul>
        @foreach($links as $link)
            
            <li>{{$link}}</li>

        @endforeach
        </ul>
    @endif
@endsection
