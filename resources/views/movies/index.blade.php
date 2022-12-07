@extends('layouts.template')

@section('content')

    @if(session()->has('add_movie_success'))
        <div class="alert alert-success alert-dismissible fade show w-100 text-center m-auto" role="alert">
            {{ session('add_movie_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('del_movie_success'))
        <div class="alert alert-success alert-dismissible fade show w-100 text-center m-auto" role="alert">
            {{ session('del_movie_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('upd_movie_success'))
        <div class="alert alert-success alert-dismissible fade show w-100 text-center m-auto" role="alert">
            {{ session('upd_movie_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('add_to_watchlist_success'))
        <div class="alert alert-success alert-dismissible fade show w-100 text-center m-auto" role="alert">
            {{ session('add_to_watchlist_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('remove_from_watchlist_success'))
        <div class="alert alert-success alert-dismissible fade show w-100 text-center m-auto" role="alert">
            {{ session('remove_from_watchlist_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('add_actor_success'))
        <div class="alert alert-success alert-dismissible fade show w-100 text-center m-auto" role="alert">
            {{ session('add_actor_success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif




    {{-- hero section --}}

    <div id="hero" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#hero" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>


        <div class="carousel-inner">

            @foreach ($carousels as $c)
                <div class="hero carousel-item @if($loop->first) active @endif" data-bs-interval="5000">
                    <div class="position-relative">
                        <div class="my-overlay">
                            <div class="my-info text-light d-flex flex-column">
                                <p>
                                    @foreach($c->genres as $g)

                                        @if(!$loop->last)
                                            {{ $g->type . ', ' }}
                                        @else
                                            {{ $g->type }}
                                        @endif
                                        
                                    @endforeach
                                    
                                    | 
                                    
                                    {{ $c->release_date }}
                                </p>
                                <h1 style="font-weight: 700;">{{ $c->title }}</h1>
                                <p style="font-size: .9rem">
                                    {{ $c->description }}
                                </p>

                                @can('user')
                                @if ($watchlist->contains($c->id))
                                    <form class="d-inline" action="/watchlists/{{ $c->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <input type="hidden" name="movie_title" value="{{ $c->title }}">
                                        <button class="my-button btn btn-primary w-50">
                                            <i class="bi bi-trash"></i>
                                            Remove from Watchlist
                                        </button>
                                    </form>
                                @else
                                    <form class="d-inline" action="/watchlists" method="post">
                                        @csrf
                                        <input type="hidden" name="movie_id" value="{{ $c->id }}">
                                        <input type="hidden" name="movie_title" value="{{ $c->title }}">
                                        <button class="my-button btn btn-primary w-50">
                                            <i class="bi bi-plus"></i>
                                            Add to Watchlist
                                        </button>
                                    </form>
                                @endif
                                @endcan
                            </div>
                        </div>
                        <img src="{{ asset('storage/' .  $c->background_url) }}" class="d-block w-100" alt="..." loading="lazy">
                    </div>
                </div>  
            @endforeach
        
        </div>

    </div>



    {{-- popular section --}}

    <div class="mt-4">
        
        <div class="section-header p-3">
            <h4 class="text-light ms-2">
                Popular
            </h4>
        </div>
    
        <div id="popular" class="carousel slide" data-bs-interval="false">
    
            <div class="carousel-inner p-4">
    
                @foreach($populars as $p)
                <div class="carousel-item @if($loop->first) active @endif">
                    <div class="card">
                        <a href="/movies/{{ $p->id }}">
                            <img class="movie-thumbnail" src="{{ asset('storage/' . $p->thumbnail_url) }}" alt="..." loading="lazy">
                        </a>
                        <div class="card-body">
                            <p class="card-title text-light text-left">{{ $p->title }}</p>
                            <div class="d-flex justify-content-between">
                                <small class="card-text text-muted">{{ date('Y', strtotime($p->release_date)) }}</small>
                                @can('user')
                                @if ($watchlist->contains($p->id))
                                    <i class="bi bi-check text-muted" style="font-size: 1.2rem"></i>
                                @else
                                    <form class="d-inline" action="/watchlists" method="post">
                                        @csrf
                                        <input type="hidden" name="movie_id" value="{{ $p->id }}">
                                        <input type="hidden" name="movie_title" value="{{ $p->title }}">
                                        <button style="font-size: 1.2rem; border: none; background: transparent">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </form>
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



    {{-- all movies section --}}

    <div class="mt-4">

        <div class="section-header p-3 d-flex justify-content-between">
            <h4 class="text-light ms-2">
                Shows
            </h4>
            
            <form action="/" class="w-25">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for movies ..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>

        <div id="genre" class="carousel slide" data-bs-interval="false">
    
            <div class="carousel-inner p-4">
    
                @foreach($genres as $g)
                <div class="carousel-item @if($loop->first) active @endif">
                    <a href="#">
                        <div class="genre-card text-light text-center p-2">
                            {{ $g->type }}
                        </div>
                    </a>
                </div>
                @endforeach
    
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    
        </div>

        <div class="sort p-4 text-light d-flex justify-content-between align-items-center">

            <div class="d-flex justify-content-evenly align-items-center w-25">
                <span>Sort by</span>
                <a href="">
                    <div class="sort-option text-light text-center p-2">
                        Latest
                    </div>
                </a>
                <a href="">
                    <div class="sort-option text-light text-center p-2">
                        A-Z
                    </div>
                </a>
                <a href="">
                    <div class="sort-option text-light text-center p-2">
                        Z-A
                    </div>
                </a>
            </div>

            @can('admin')
            <a href="/movies/create" class="my-button btn btn-primary w-25">
                <i class="bi bi-plus"></i>
                Add Movie
            </a>
            @endcan

        </div>

        <div id="movie" class="carousel slide" data-bs-interval="false">
    
            <div class="carousel-inner p-4">
    
                @foreach($movies as $m)
                <div class="carousel-item @if($loop->first) active @endif">
                    <div class="card">
                        <a href="/movies/{{ $m->id }}">
                            <img class="movie-thumbnail" src="{{ asset('storage/' . $m->thumbnail_url) }}" alt="..." loading="lazy">
                        </a>
                        <div class="card-body">
                            <p class="card-title text-light text-left text-truncate">{{ $m->title }}</p>
                            <div class="d-flex justify-content-between">
                                <small class="card-text text-muted">{{ date('Y', strtotime($m->release_date)) }}</small>
                                @can('user')
                                @if ($watchlist->contains($m->id))
                                    <i class="bi bi-check text-muted" style="font-size: 1.2rem"></i>
                                @else
                                    <form class="d-inline" action="/watchlists" method="post">
                                        @csrf
                                        <input type="hidden" name="movie_id" value="{{ $m->id }}">
                                        <input type="hidden" name="movie_title" value="{{ $m->title }}">
                                        <button style="font-size: 1.2rem; border: none; background: transparent">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </form>
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

    {{-- custom js --}}
    <script src="/js/custom.js"></script>

@endsection