@extends('layouts.template')
@section('content')

    <div class="mt-4 d-flex flex-wrap">

        <div class="section-header p-3">
            <h4 class="text-light ms-2">
                Edit Profile
            </h4>
        </div>

        <div style="width: 33%" class="p-3 d-flex flex-column align-items-center">
            <!-- Button trigger modal -->
            <div class="pfp" data-bs-toggle="modal" data-bs-target="#exampleModal">
                @if(!$user->image_url)
                    <i class="bi bi-person-circle text-light"
                    style="font-size: 11rem"></i>
                @else
                    <img src="{{ asset('storage/' . $user->image_url) }}" alt=""
                    class="rounded-circle">
                @endif
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header text-light">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Change Avatar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        style="filter: invert(1) grayscale(100%) brightness(200%);"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/users/{{ $user->id }}/avatar" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            
                            <div class="my-input has-validation">

                                <input type="hidden" name="old_image_url" value="{{ $user->image_url }}">

                                <input type="file" class="form-control text-light @error('image_url') is-invalid @enderror" 
                                id="image_url" name="image_url" style="background-color: var(--black)">

                                @error('image_url')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="mt-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary mx-2" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                            
                        </form>
                    </div>
                    </div>
                </div>
            </div>

            <h4 class="text-light">{{ $user->username }}</h4>
            <p class="text-muted">{{ $user->email }}</p>
        </div>


        <div style="width: 67%" class="p-3">
            <form class="mt-4 text-light" action="/users/{{ $user->id }}" method="post" enctype="multipart/form-data"
            style="width: 75%">
                @method('put')
                @csrf

                {{-- username --}}
                <div class="input-group has-validation d-flex mb-3">
                    <span class="input-group-text">Username</span>
                    <input type="text" id="username" name="username" placeholder="Username"
                        class="form-control @error('username') is-invalid @enderror" 
                        value="{{ $user->username }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                {{-- email --}}
                <div class="input-group has-validation d-flex mb-3">
                    <span class="input-group-text">Email</span>
                    <input type="text" id="email" name="email" placeholder="Email"
                        class="form-control @error('email') is-invalid @enderror" 
                        value="{{ $user->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                {{-- dob --}}
                <div class="input-group has-validation d-flex mb-3">
                    <span class="input-group-text">DOB</span>
                    <input type="date" id="dob" name="dob" placeholder="Date of Birth"
                        class="form-control @error('dob') is-invalid @enderror" 
                        value="{{ date('Y-m-d', strtotime($user->dob)) }}">
                    @error('dob')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                {{-- phone --}}
                <div class="input-group has-validation d-flex mb-3">
                    <span class="input-group-text">Phone</span>
                    <input type="text" id="phone" name="phone" placeholder="Phone Number"
                        class="form-control @error('phone') is-invalid @enderror" 
                        value="{{ $user->phone }}">
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                {{-- submit --}}
                <button class="my-button btn btn-primary w-100 mt-3" type="submit">
                    Save Changes
                </button>

            </form>
        </div>

    </div>
@endsection