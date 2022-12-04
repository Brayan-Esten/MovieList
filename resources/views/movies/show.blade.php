@extends('layouts.template')
@section('content')
    
    <div class="w-100" style="height: 500px; overflow: hidden;">
        <div class="position-relative">
            <div class="movie-detail-overlay">
                <img class="img-thumbnail" src="{{ asset('storage/' . $movie->thumbnail_url) }}" alt="..."
                style="margin-left: 10em; max-width: 100%; height: 400px;">
                
                <div class="my-info text-light d-flex flex-column">
                    
                    <div class="mt-4">
                        <div class="d-flex justify-content-between">
                            <h1 style="font-weight: 700;">{{ $movie->title }}</h1>
                            @can('admin')
                            <div>
                                <a href="/movies/{{ $movie->id }}/edit" class="text-light mx-3" style="font-size: 1.5rem">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form class="d-inline" action="/movies/{{ $movie->id }}" method="post">
                                    @method('delete')
                                    @csrf

                                    <button class="text-light" onclick="return confirm('Delete this movie ?')"
                                    style="font-size: 1.5rem; border: none; background: transparent">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                            @endcan
                        </div>
                        <p class="fw-thin" style="font-size: .9rem">
                            Released on {{ $movie->release_date }}
                        </p>
                    </div>

                    <div class="d-flex flex-row">
                        @foreach($movie->genres as $g)

                            <div class="text-light text-center genre-card-v2">
                                {{ $g->type }}
                            </div>
                            
                        @endforeach
                    </div>
                    

                    <div class="mt-4">
                        <h5 class="fw-bold">Synopsis</h5>
                        <p class="fw-thin" style="font-size: .9rem;">
                            {{ $movie->description }}
                        </p>
                    </div>

                    <div class="mt-4">
                        <h5 class="fw-bold">Director</h5>
                        <p class="fw-thin" style="font-size: .9rem;">
                            {{ $movie->director }}
                        </p>
                    </div>

                </div>
            </div>
            <img src="{{ asset('storage/' .  $movie->background_url) }}" class="d-block w-100" alt="...">
        </div>
    </div> 

    <div class="mt-5">

        <div class="section-header p-3">
            <h4 class="text-light ms-2">
                Casts
            </h4>
        </div>

        <div class="p-4 d-flex flex-wrap">
            @foreach ($casts as $c)
            <div class="cast-card">
                <a href="/actors/{{ $c->actor->id }}">
                    <div class="card">
                        <img class="actor-thumbnail card-img-top" 
                        src="{{ asset('storage/' . $c->actor->image_url) }}" alt="...">
                        <div class="card-body rounded-bottom">
                            <p class="card-title text-light fw-bold" style="font-size: 1.1rem">{{ $c->actor->name }}</p>
                            <small class="card-text text-light">{{ $c->name }}</small>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>

    <div class="mt-4">
        
        <div class="section-header p-3">
            <h4 class="text-light ms-2">
                More Movies
            </h4>
        </div>
    
        <div id="movie" class="carousel slide" data-bs-interval="false">
            
            <div class="carousel-inner p-4">
    
                @foreach($movies as $m)
                <div class="carousel-item @if($loop->first) active @endif">
                    <div class="card">
                        <a href="/movies/{{ $m->id }}">
                            <img class="img-thumbnail movie-thumbnail" src="{{ asset('storage/' . $m->thumbnail_url) }}" alt="...">
                        </a>
                        <div class="card-body">
                            <p class="card-title text-light text-left">{{ $m->title }}</p>
                            <div class="d-flex justify-content-between">
                                <small class="card-text text-muted">{{ $m->release_date }}</small>
                                @can('user')
                                @if ($watchlist->contains($m->id))
                                    <i class="bi bi-check text-muted" style="font-size: 1.2rem"></i>
                                @else
                                    <a href="/watchlist/add/{{ $m->id }}" style="font-size: 1.2rem">
                                        <i class="bi bi-plus-lg"></i>
                                    </a>
                                @endif
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
    
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-slide="prev">
                <span><i class="bi bi-arrow-left-square-fill"></i></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-slide="next">
                <span><i class="bi bi-arrow-right-square-fill"></i></span>
            </button>
    
        </div>

    </div>




    {{-- jQuery --}}
    <script src="/js/jquery-3.6.1.min.js"></script>

    <script>
        const movieWidth = $('#movie .carousel-inner')[0].scrollWidth;
        const movieCardWidth = $('#movie .carousel-item').width();

        const movieInner = $('#movie .carousel-inner');
        const movieNext = $('#movie .carousel-control-next');
        const moviePrev = $('#movie .carousel-control-prev');

        let movieScrollPos = 0;

        movieNext.on('click', function () {

            if (movieScrollPos < movieWidth) {
                movieScrollPos += movieCardWidth * 2;
                movieInner.animate({
                    scrollLeft: movieScrollPos
                }, 600);
            }

        });

        moviePrev.on('click', function () {

            if (movieScrollPos > 0) {
                movieScrollPos -= movieCardWidth * 2;
                movieInner.animate({
                    scrollLeft: movieScrollPos
                }, 600);
            }

        });
    </script>

@endsection