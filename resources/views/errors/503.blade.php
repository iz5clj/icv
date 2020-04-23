<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    @include('partials.head')

    <style>
        body {
            background-color: #2ECC40;
        }

        img {
            max-width: 300px;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="text-center">
                    <p class="text-white text-uppercase">italian corona virus</p>
                    <p class="text-white">Please come back soon</p>
            </div>
            </div>
        </div>
    </div>

    {{-- @include('partials.javascript') --}}

</body>

</html>
