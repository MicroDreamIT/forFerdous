<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shapecss@2.1.3/public/css/shape.min.css">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<nav class="bg-info">
    <!--for logo-->

    <!--for responsive-->
    <button class="for-mobile"></button>

    <!--nav items-->
    <ul class="item">
        <li><a href="#">Home</a></li>
        <li><a href="#">Dorpdown</a>
            <ul class="sub">
                <li><a href="#">Dorpdown 1</a></li>
                <li><a href="#">Dorpdown 2</a></li>
                <li><a href="#">Dorpdown 3</a></li>
            </ul>
        </li>
        <li><a href="#">ShapeCss</a></li>
    </ul>
    <ul class="item right">
        <li><a href="#">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="#">Contact US</a></li>
    </ul>
</nav>

<div class="container">
    @yield('content')
</div>
    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
