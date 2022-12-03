@extends('layouts.template')
@section('content')
    
    <div class="w-100" style="height: 500px; overflow: hidden;">
        <div class="position-relative">
            <div class="movie-detail-overlay">
                <img class="img-thumbnail" src="{{ asset('storage/' . $movie->thumbnail_url) }}" alt="..."
                style="margin-left: 10em; max-width: 100%; height: 400px;">
                
                <div class="my-info text-light d-flex flex-column">
                    <div class="d-flex flex-row">
                        @foreach($movie->genres as $g)

                            <div class="text-light text-center genre-card-v2">
                                {{ $g->type }}
                            </div>
                            
                        @endforeach
                    </div>
                    
                    <div class="mt-4">
                        <h1 style="font-weight: 700;">{{ $movie->title }}</h1>
                        <p class="fw-thin" style="font-size: .9rem">
                            Released on {{ $movie->release_date }}
                        </p>
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

@endsection