<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Main Page</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        
        @if(Session::has('global'))
            <p>{{ Session::get('global') }}</p>
        @endif

        @include('layout.nav')
        @yield('content')
    </body>
</html>