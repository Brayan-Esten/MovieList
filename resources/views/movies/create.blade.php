@extends('layouts.template')

@section('content')
    
    <div class="container mt-4 p-4">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="text-light">
                    
                    <div class="section-header p-3">
                        <h4 class="text-light ms-2">
                            Add Movie
                        </h4>
                    </div>

                    <form class="mt-4" action="/movies" method="post">
                        @csrf

                        {{-- title --}}
                        <div class="my-input mb-3 has-validation">

                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">

                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- description--}}
                        <div class="my-input mb-3 has-validation">

                            <label for="description" class="form-label">Description</label>
                            <textarea type="text" class="form-control" id="description" name="description"></textarea>

                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- genre --}}
                        <div class="mb-3 has-validation">

                            <label class="form-label">Genre</label>

                            <div class="dropdown">

                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    -- Select these options --
                                </button>

                                <ul class="dropdown-menu checkbox-menu allow-focus">
                                    @foreach($genres as $g)
                                    <li class="dropdown-item">
                                        <label class="form-check-label d-block w-100">
                                            <input class="form-check-input" type="checkbox" value="{{ $g->id }}" name="genres[]">
                                            {{ $g->type }}
                                        </label>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                            
                        </div>



                        {{-- actors / character --}}
                        <div class="my-input mb-3 has-validation" id="charInput">

                            <div class="d-flex justify-content-around w-100 mb-3">
                                
                                <div class="actor-input">
                                    <label class="form-label">Actor</label>
                                    <select class="form-select" aria-label="Default select example" name="actors[]">
                                        <option selected>-- Open this select menu --</option>
                                        @foreach($genres as $g)
                                            <option value="{{ $g->id }}">{{ $g->type }}</option>
                                        @endforeach
                                    </select>
                                </div>
    
                                <div class="character-input">
                                    <label class="form-label">Character Name</label>
                                    <input type="text" class="form-control" name="characters[]">
                                </div>

                            </div>

                        </div>
                        
                        
                        {{-- add/remove button --}}
                        <div class="my-input mb-3 d-flex justify-content-end w-100 mt-4">
                            <div class="my-button btn btn-primary" id="addCharBtn">
                                <i class="bi bi-plus"></i>
                                Add Character
                            </div>
                            <div class="my-button btn btn-primary" id="delCharBtn">
                                <i class="bi bi-dash"></i>
                                Remove Character
                            </div>
                        </div>



                        {{-- director --}}
                        <div class="my-input mb-3 has-validation">

                            <label for="director" class="form-label">Director</label>
                            <input type="text" class="form-control" id="director" name="director">

                            @error('director')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- release date --}}
                        <div class="my-input mb-3 has-validation">

                            <label for="release_date" class="form-label">Release Date</label>
                            <input type="date" class="form-control" id="release_date" name="release_date">

                            @error('release_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>


                        {{-- thumbnail_url --}}
                        <div class="my-input mb-3 has-validation">
                            <label for="thubnail_url" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail_url" name="thumbnail_url">

                            @error('thumbnail_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        {{-- background_url --}}
                        <div class="my-input mb-3 has-validation">
                            <label for="thubnail_url" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="background_url" name="background_url">

                            @error('background_url')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- submit --}}
                        <button class="my-button btn btn-primary w-100 mt-3" type="submit">
                            Create
                        </button>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

    <script>


        let generateField = function(){

            const div = document.createElement('div');
            div.classList.add('d-flex', 'justify-content-around', 'w-100', 'mb-3');

            div.innerHTML = 
            `
                <div class="actor-input">
                    <label class="form-label">Actor</label>
                    <select class="form-select" aria-label="Default select example" name="actors[]">
                        <option selected>-- Open this select menu --</option>
                        @foreach($genres as $g)
                            <option value="{{ $g->id }}">{{ $g->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="character-input">
                    <label class="form-label">Character Name</label>
                    <input type="text" class="form-control" name="characters[]">
                </div>
            `;

            return div;
        };

        const charInput = document.getElementById('charInput');

        const addCharBtn = document.getElementById('addCharBtn');
        addCharBtn.addEventListener('click', function (e) {
            charInput.appendChild(generateField());
        });

        const delCharBtn = document.getElementById('delCharBtn');
        delCharBtn.addEventListener('click', function(e){
            if(charInput.childElementCount > 1){
                charInput.removeChild(charInput.lastElementChild);
            }
        })

        const chekboxMenu = $('.checkbox-menu');
        checkboxMenu.on('change', 'input[type="checkbox"]', function () {
            $(this).closest('li').toggleClass('active', this.checked);
        });        

    </script>

@endsection