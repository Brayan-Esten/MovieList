@extends('layouts.template')

@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5">

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

                <main class="w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal">Please Log In</h1>
                    <form action="/login" method="post">
                        @csrf

                        {{-- username --}}
                        <div class="form-floating">
                            <input type="text" id="username" name="username" placeholder="Username" autofocus
                                class="form-control @error('email') is-invalid @enderror" value={{ old('username') }}>
                            <label for="username">Username</label>
                            @error('username')
                                {{ $message }}
                            @enderror
                        </div>

                        {{-- password --}}
                        <div class="form-floating">
                            <input type="password" id="password" name="password" placeholder="Password"
                                class="form-control" >
                            <label for="password">Password</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">LOGIN</button>

                    </form>
                    <small class="d-block text-center mt-4">
                        Not registered ? register <a href="/register">here</a>
                    </small>
                </main>

            </div>
        </div>
    </div>

@endsection