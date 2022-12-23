@extends('layouts.template')

@section('content')

    <div class="container mt-4 p-4">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if(session()->has('logInError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('logInError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

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

                    <form class="mt-4" action="/login" method="post">
                        @csrf

                        {{-- Email --}}
                        <div class="input-group has-validation d-flex mb-3">
                            <span class="input-group-text">Email</span>
                            <input type="email" id="email" name="email" placeholder="Enter your email" autofocus
                                class="form-control @error('email') is-invalid @enderror" 
                                value={{ old('email', Cookie::get('email'))}}>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- password --}}
                        <div class="input-group has-validation d-flex mb-3">
                            <span class="input-group-text">Password</span>
                            <input type="password" id="password" name="password" placeholder="Enter your password"
                            class="form-control" value="{{ Cookie::get('password') }}">
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="halo" id="flexCheckDefault"
                            name="remember_me">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember Me
                            </label>
                        </div>

                        <button class="my-button btn btn-primary w-100" type="submit">
                            Login <i class="bi bi-box-arrow-in-right"></i>
                        </button>

                    </form>
                    <small class="d-block text-center mt-4">
                        Don't have an account ? Register <a href="/register" style="color: var(--red)">here</a>
                    </small>
                </div>

            </div>
        </div>
    </div>

@endsection