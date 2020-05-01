<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('front.partials.head')

</head>

<body>
    <div class="container vh">
        <div class="row h-100 flex-column justify-content-center align-items-center">
            <div class="row">
                <div class="col text-center">
                    <p class="data">{{ $m1->updated }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col mw15 px-2 text-center text-sm-right text-danger mr-sm-3">
                    {{-- <p>{{ $m1->updated }}</p> --}}
                    <p class="numero">{{ $m1->text01 }}</p>
                    <p class="text02">{{ $m1->text02 }}</p>
                </div>
                <div class="col mw15 px-2 text-center text-sm-left text-success ml-sm-3">
                    {{-- <p>{{ $m2->updated }}</p> --}}
                    <p class="numero">{{ $m2->text01 }}</p>
                    <p class="text02">{{ $m2->text02 }}</p>
                </div>
            </div>

        </div>

    </div>

    @if($display_grid)
    <div class="row justify-content-center">
        <div class="ridere text-center">
            <p>Un po di humor</p>
        </div>
    </div>
    <a href="#grid" class="btn arrow bounce"></a>
    @endif
    </div>
    @if($display_grid)
    <div class="container">
        <section id="grid">
            <div class="card-columns pt-2">
                {{-- begin loop --}}
                @foreach ($posts as $post)
                @if($post->type == 1)
                <div class="card">
                    <a class="glightbox" href="{{ 'uploads/original/' . $post->original }}" data-gallery="gal">
                        <img class="img-fluid" @if($post->thumb_img)
                        src="{{ 'uploads/original/thumb/' . $post->thumb_img }}"
                        @elseif($post->type == 1)
                        src="{{ 'uploads/original/' . $post->original }}"
                        @else
                        src="video.png"
                        @endif
                        alt="{{ $post->description ? $post->description : 'italian corona virus humor' }}"
                        />
                    </a>
                </div>
                @elseif($post->type == 4)
                <div class="card">
                    <a class="glightbox" href="{{ $post->link }}" data-gallery="gal">
                        <img class="img-fluid" @if($post->thumb_img)
                        src="{{ 'uploads/original/thumb/' . $post->thumb_img }}"
                        @else
                        src="video.png"
                        @endif
                        alt="{{ $post->description ? $post->description : 'italian coronavirus humor' }}"
                        />
                    </a>
                </div>
                @endif
                @endforeach
                {{-- end loop --}}
            </div>
        </section>
    </div>
    @endif

    @include('front.partials.footer')

    @include('front.partials.javascript')

    <script>
        $(function() {
            function count($this) {
                var current = parseInt($this.html(), 10);
                current = current + 250; /* Where 50 is increment */

                $this.html(++current);
                if (current > $this.data("count")) {
                    $this.html($this.data("count"));
                } else {
                    setTimeout(function() {
                        count($this);
                    }, 5);
                }
            }

            $(".numero").each(function() {
                $(this).data("count", parseInt($(this).html(), 10));
                $(this).html("0");
                count($(this));
            });

            var lightbox = GLightbox({
                loop: true
            });

        });

    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159413450-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-159413450-1');

    </script>


</body>

</html>
