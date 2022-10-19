@extends('layouts.template')

@section('content')
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="w-100 m-auto">
                    <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                    <form action="/register" method="post">
                        @csrf

                        {{-- username --}}
                        <div class="form-floating">
                            <input type="text" id="username" name="username" placeholder="Username"
                                class="form-control rounded-top @error('username') is-invalid @enderror" value="{{ old('username') }}">
                            <label for="username">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- email --}}
                        <div class="form-floating">
                            <input type="text" id="email" name="email" placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- password --}}
                        <div class="form-floating">
                            <input type="password" id="password" name="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror">
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- password confirmation --}}
                        <div class="form-floating">
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"
                                class="form-control @error('password') is-invalid @enderror">
                            <label for="password_confirmation">Confirm Password</label>
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
                        
                    </form>
                    <small class="d-block text-center mt-4">
                        Already registered ? <a href="/login">login</a>
                    </small>
                </main>
            </div>
        </div>
    </div>

@endsection