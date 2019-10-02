<!-- Stored in resources/views/layouts/app.blade.php -->
{{-- Comentario do BLADE --}}
<!-- Stored in resources/views/layouts/app.blade.php -->
@php

echo "comando PHP";

@endphp

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div style="height:10%; background-color: green;">
        @section('sidebar')
            This is the master sidebar.
        @show
        </div>

        <div class="container" style="height:80%; background-color: red;">
            @yield('content')
        </div>
        
        <div style="height:10%; background-color: blue;">
        @section('footer')
            This is the footer sidebar.
        @show
        </div>
    </body>
</html>