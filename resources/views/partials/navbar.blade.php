<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">

        <h3 class="navbar-brand d-flex" style="font-weight: 900;">
            <span style="color: var(--red);">Movie</span>
            <span style="color: var(--white)">List</span>
        </h3>


        {{-- burger button --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
            <ul class="navbar-nav d-flex justify-content-around ms-auto" style="width: 67%;">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/movies">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/actors">Actors</a>
                </li>

                @auth
                    @can('user')
                        <li class="nav-item">
                            <a href="/watchlist" class="nav-link">
                                My Watchlist
                            </a>
                        </li>
                    @endcan
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            style="font-size: 1.2rem;">
                            <i class="bi bi-person-circle"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i>
                                        Log Out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/register" class="nav-link">
                            Register
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">
                            Login
                        </a>
                    </li>
                @endauth

            </ul>
        </div>

    </div>
</nav>