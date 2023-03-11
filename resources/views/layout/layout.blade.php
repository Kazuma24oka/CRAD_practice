<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>@yield('title')</title>
    <!-- ターミナルで読み込んだbootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="/css/record.css" >

</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>