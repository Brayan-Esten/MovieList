@extends('layouts.template')
@section('content')
    
    <div class="mt-4 d-flex">

        <div class="short-info p-3 d-flex flex-column align-items-center">

            <div>

                <img src="{{ asset('storage/' . $actor->image_url) }}" alt="" 
                class="actor-thumbnail img-thumbnail" style="width: 200px">

                <div class="section-header p-3 mt-3">
                    <h4 class="text-light fw-bold ms-2">
                        Personal Info
                    </h4>
                </div>

                <div class="mt-4">
                    
                    <div>
                        <h6 class="text-light">Popularity</h6>
                        <p class="text-muted">{{ $actor->popularity }}</p>
                    </div>
                    
                    <div>
                        <h6 class="text-light">Gender</h6>
                        <p class="text-muted">{{ ucwords($actor->gender) }}</p>
                    </div>
    
                    <div>
                        <h6 class="text-light">Birthday</h6>
                        <p class="text-muted">{{ date('F jS, Y', strtotime($actor->dob)) }}</p>
                    </div>

                    <div>
                        <h6 class="text-light">Place of Birth</h6>
                        <p class="text-muted">{{ $actor->pob }}</p>
                    </div>

                </div>

            </div>
        </div>

        <div class="long-info p-3 d-flex flex-column">
            <div class="d-flex justify-content-between" style="width: 80%;">
                <h1 class="text-light" style="width: 80%;">{{ $actor->name }}</h1>

                @can('admin')
                    <div class="d-flex justify-content-around" style="width: 20%;"">
                        <a href="/actors/{{ $actor->id }}/edit" class="text-light" style="font-size: 1.5rem;">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form class="d-inline" action="/actors/{{ $actor->id }}" method="post">
                            @method('delete')
                            @csrf

                            <button class="text-light" onclick="return confirm('Delete this actor ?')"
                            style="font-size: 1.5rem; border: none; background: transparent">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                @endcan
            </div>
            
            <div class="mt-2">
                <h5 class="text-light">Biography</h5>
                <p class="text-light fw-light">{{ $actor->biography }}</p>
            </div>

            <div class="mt-2">
                <h5 class="text-light">Appeared in</h5>

                @if($actor->movies->count() != 0)
                <div class="d-flex flex-row flex-wrap mt-3">
                    @foreach($actor->movies as $m)
                        <div class="movie-card me-3 mb-3">
                            <a href="/movies/{{ $m->id }}">
                                <div class="card">
                                    <img class="mov-thumbnail card-img-top img-fluid" loading="lazy"
                                    src="{{ asset('storage/' . $m->thumbnail_url) }}" alt="...">
                                    <div class="card-body rounded-bottom">
                                        <p class="card-title text-light text-truncate">
                                            {{ $m->title }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                @else
                <div class="no-result text-muted">
                    <i class="bi bi-emoji-frown" style="font-size: 10rem"></i>
                    <h4>No Results Found</h4>
                </div>
                @endif
            
            </div>
        </div>
    </div>

@endsection