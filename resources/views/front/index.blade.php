<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('front.partials.head')

</head>

<body>
    <div class="container vh">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="mr-3 text-right mw15 px-2 text-danger">
                <p>{{ $m1->updated }}</p>
                <p class="numero">{{ $m1->text01 }}</p>
                <p class="text02">{{ $m1->text02 }}</p>
            </div>
            <div class="ml-3 mw15 px-2 text-success">
                <p>{{ $m2->updated }}</p>
                <p class="numero">{{ $m2->text01 }}</p>
                <p class="text02">{{ $m2->text02 }}</p>
            </div>

        </div>
        @if($display_grid)
        <a href="#grid" class="btn arrow bounce"></a>
        @endif
    </div>
    @if($display_grid)
    <div class="container mt-5">
        <div id="grid" class="">
            <div class="card-columns">
                {{-- begin loop --}}
                @foreach ($posts as $post)
                <div class="card">
                    <a class="glightbox" href="{{ 'uploads/original/' . $post->original }}" data-gallery="gal">
                        <img class="img-fluid" 
                        @if($post->type == 1)
                        src="{{ 'uploads/original/' . $post->original }}" 
                        @else
                        src="default.png" 
                        @endif
                        alt="{{ $post->description ? $post->description : 'italian corona virus' }}" />
                    </a>
                </div>
                @endforeach
                {{-- end loop --}}
            </div>
        </div>
    </div>
    @endif

    @include('front.partials.javascript')

</body>

</html>
