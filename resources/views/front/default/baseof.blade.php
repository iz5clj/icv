<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('front.partials.head')
</head>

<body>

    @yield('content')
    
    @include('front.partials.javascript')

    @yield('extra-javascript')

</body>

</html>
