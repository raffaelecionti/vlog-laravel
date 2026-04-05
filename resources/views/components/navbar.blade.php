 <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">MovieMania</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts') }}">Tutti i post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about-us') }}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contattaci</a>
                </li>


                {{-- Dropdown Servizi (Film e Categorie) --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        I nostri servizi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('movie.list') }}">Tutti i film</a></li>
                        <li><a class="dropdown-item" href="{{ route('genre.index') }}">Tutte le categorie</a></li>
                        @auth
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('movie.create') }}">Inserisci un film</a></li>
                            <li><a class="dropdown-item" href="{{ route('genre.create') }}">Inserisci categoria</a></li>
                        @endauth
                    </ul>
                </li>
            </ul>

            {{-- Parte Destra: Autenticazione --}}
            <ul class="navbar-nav ms-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profilo personale</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>