@extends('layouts.template')

@section('content')
    
    <div class="container mt-4 p-4">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="text-light">
                    <h3 class="font-weight-bold d-flex justify-content-center">
                        <span>
                            Hello, welcome back to&nbsp
                        </span>
                        <span class="d-flex" style="font-weight: 750;">
                            <span style="color: var(--red);">Movie</span>
                            <span style="color: var(--white)">List</span>
                        </span>
                    </h3>

                    <form class="mt-4" action="/register" method="post">
                        @csrf

                        {{-- username --}}
                        <div class="input-group has-validation d-flex mb-3">
                            <span class="input-group-text">Username</span>
                            <input type="text" id="username" name="username" placeholder="Username"
                                class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
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
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- password --}}
                        <div class="input-group has-validation d-flex mb-3">
                            <span class="input-group-text">Password</span>
                            <input type="password" id="password" name="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- password confirmation --}}
                        <div class="input-group has-validation d-flex mb-3">
                            <span class="input-group-text">Confirm Password</span>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="w-100 btn btn-primary mt-3" type="submit">
                            Register
                        </button>
                        
                    </form>
                    <small class="d-block text-center mt-4">
                        Already have an account ? Login <a href="/login" style="color: var(--red);">here</a>
                    </small>
                </div>
            </div>
        </div>
    </div>

@endsection