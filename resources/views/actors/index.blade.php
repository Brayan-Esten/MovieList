@extends('layouts.template')
@section('content')

    <div class="mt-5">
        
        <div class="section-header p-3 d-flex justify-content-between">
            
            <h4 class="text-light ms-2">
                Actors
            </h4>
            
            <div class="w-50 d-flex justify-content-end">

                <form action="/actors" class="mx-3">
                    
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for actor ..." name="search_actor"
                        value="{{ request('search_actor') ? request('search_actor') : '' }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>

                </form>

                @can('admin')
                <a href="/actors/create" class="my-button btn btn-primary">
                    <i class="bi bi-plus"></i>
                    Add Actor
                </a>
                @endcan

            </div>
        </div>
            
        @if($actors->count() != 0)
            <div class="mx-auto p-2 d-flex flex-wrap" style="width: 96%">

                @foreach ($actors as $a)
                <div class="cast-card m-4">
                    <a href="/actors/{{ $a->id }}">
                        <div class="card">
                            <img class="actor-thumbnail card-img-top img-fluid" loading="lazy"
                            src="{{ asset('storage/' . $a->image_url) }}" alt="...">
                            <div class="card-body rounded-bottom">
                                <p class="card-title text-light fw-bold text-truncate" style="font-size: 1.1rem">
                                    {{ $a->name }}
                                </p>
                                <small class="card-text text-light d-block text-truncate">
                                    @foreach ($a->movies as $m)
                                        @if ($loop->first)
                                            {{ $m->title }}
                                        @else
                                            {{ ', ' . $m->title}}
                                        @endif
                                    @endforeach
                                </small>
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

@endsection