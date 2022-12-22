@extends('layouts.template')
@section('content')

    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show w-100 text-center m-auto" role="alert">
            {{ session('message') }}
            <button type="button" class="text-light btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="my-5">

        <div class="section-header p-3">
            <h4 class="text-light ms-2">
                My Watchlist
            </h4>
        </div>

        <form action="/watchlist" class="mt-5 w-75 mx-auto">
                    
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search your watchlist" name="search"
                value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>

        </form>

        <form id="filter_status" action="/watchlists" class="mt-3 w-75 mx-auto text-muted my-input" style="font-size: 1.2rem">
            <i class="bi bi-funnel-fill" style="margin-right: 1rem"></i>
            <select class="form-select d-inline-block" style="width: 15%" 
            name="filter_status" onchange="submit()">
                <option value="all" selected>All</option>
                <option value="planned" @if(request('filter_status') == 'planned') selected @endif>
                    Planned
                </option>
                <option value="watching" @if(request('filter_status') == 'watching') selected @endif>
                    Watching
                </option>
                <option value="finished" @if(request('filter_status') == 'finished') selected @endif>
                    Finished
                </option>
            </select>
        </form>

        <div class="container text-light mt-5">
            <div class="row">
                <div class="col-md-3">Poster</div>
                <div class="col-md-4">Title</div>
                <div class="col-md-3">Status</div>
                <div class="col-md-2">Action</div>
            </div>

            @foreach ($my_watchlist as $wl)
                <div class="row mt-4 rounded" style="background-color: #262524">
                    <div class="col-md-3 p-0">
                        <a href="">
                            <img src="{{ $wl->movie->thumbnail_url }}" style="height: 175px" loading="lazy">
                        </a>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        {{ $wl->movie->title }}
                    </div>
                    <div class="col-md-3 d-flex align-items-center" style="color: #02f54f">
                        {{ ucwords($wl->status) }}
                    </div>
                    <div class="col-md-2 d-flex align-items-center">

                        {{-- modal toggle --}}
                        <div data-bs-toggle="modal" data-bs-target="{{ '#exampleModal' . $loop->iteration }}">
                            <i class="bi bi-three-dots"></i>
                        </div>

                        <!-- modal -->
                        <div class="modal fade" id="{{ 'exampleModal' . $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-light">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $wl->movie->title }}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/watchlists/{{ $wl->id }}" method="post" enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            
                                            <input type="hidden" name="movie_title" value="{{ $wl->movie->title }}">

                                            <select class="form-select" name="status"
                                            style="background-color: #222; color: #fff; border: none;">
                                                <option value="planned" @if($wl->status == 'planned') selected @endif>
                                                    Planned
                                                </option>
                                                <option value="watching" @if($wl->status == 'watching') selected @endif>
                                                    Watching
                                                </option>
                                                <option value="finished" @if($wl->status == 'finished') selected @endif>
                                                    Finished
                                                </option>
                                                <option value="remove">Remove</option>
                                            </select>

                                            <div class="mt-3 d-flex justify-content-end">
                                                <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>  
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <script>
        const submit = function(){
            const filter_status = document.getElementById('filter_status');
            filter_status.submit();
        }
    </script>
    
@endsection