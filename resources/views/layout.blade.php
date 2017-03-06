<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel</title>

        <!-- CSS and JS include -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("css/bootstrap-theme.css") }}" rel="stylesheet" type="text/css">

        <script src="{{ asset("js/bootstrap.js") }}" type="text/javascript"></script>
        <script src="{{ asset("js/jquery-3.1.1.min.js") }}" type="text/javascript"></script>

    </head>
    <body>
    
        @yield('content')

    </body>
</html>
