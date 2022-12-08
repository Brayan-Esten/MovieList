@extends('layouts.template')

@section('content')
    
    <div class="container mt-4 p-4">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="text-light">
                    
                    <div class="section-header p-3">
                        <h4 class="text-light ms-2">
                            Add Actor
                        </h4>
                    </div>

                    <form class="mt-4" action="/actors/{{ $actor->id }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        {{-- name --}}
                        <div class="my-input mb-3 has-validation">

                            <label for="title" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                            value="{{ old('name', $actor->name) }}"
                            id="name" name="name">

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- gender --}}
                        <div class="my-input mb-3 has-validation">

                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select @error('gender') is-invalid @enderror"
                            name="gender">
                                <option value="">-- Open this select menu --</option>
                                <option value="male" @if($actor->gender == 'male') selected @endif>Male</option>
                                <option value="female" @if($actor->gender == 'female') selected @endif>Female</option>
                            </select>

                            @error('gender')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- biography --}}
                        <div class="my-input mb-3 has-validation">

                            <label for="biography" class="form-label">Biography</label>
                            <textarea type="text" class="form-control @error('biography') is-invalid @enderror" 
                            id="biography" name="biography" rows="7">{{ old('biography', $actor->biography) }}</textarea>

                            @error('biography')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- dob --}}
                        <div class="my-input mb-3 has-validation">

                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control @error('dob') is-invalid @enderror" 
                            value="{{ old('dob', date('Y-m-d', strtotime($actor->dob))) }}"
                            id="dob" name="dob">

                            @error('dob')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- pob --}}
                        <div class="my-input mb-3 has-validation">

                            <label for="pob" class="form-label">Place of Birth</label>
                            <input type="text" class="form-control @error('pob') is-invalid @enderror" 
                            value="{{ old('popularity', $actor->pob) }}"
                            id="pob" name="pob">

                            @error('popularity')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- image url --}}
                        <div class="my-input mb-3 has-validation">

                            <input type="hidden" name="old_image_url" value="{{ $actor->image_url }}">

                            <label for="image_url" class="form-label">Image URL</label>
                            <input type="file" class="form-control @error('image_url') is-invalid @enderror" 
                            id="image_url" name="image_url">

                            @error('image_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- popularity --}}
                        <div class="my-input mb-3 has-validation">

                            <label for="popularity" class="form-label">Popularity</label>
                            <input type="number" class="form-control @error('popularity') is-invalid @enderror" 
                            value="{{ old('popularity', $actor->popularity) }}"
                            id="popularity" name="popularity">

                            @error('popularity')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- submit --}}
                        <button class="my-button btn btn-primary w-100 mt-3" type="submit">
                            Update
                        </button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

@endsection