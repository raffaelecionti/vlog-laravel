  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about-us') }}">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            i nostri servizi:
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('movie.list') }}">tutti i nostri film</a></li>
          </ul>
        </li>
       <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="{{ route('movie.create') }}">inserisci un nuovo film</a>
            </li>
          </ul>
           <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('movie.index') }}">tutti i  film</a></li>
            <li><a class="dropdown-item" href="{{ route('genre.create') }}">inserisci una categoria</a></li>
          </ul>
      </ul>
       <li class="nav-item dropdown">
        @auth
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Profilo personale</a></li>
             <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();" class="dropdown-item">Logout</a> 
              <form id="form-logout" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
              </form>
            </li>
          </ul>
          @else
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao,Ospite! 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">register</a></li>
            <li><a class="dropdown-item" href="{{ route('genre.index') }}">tutte le categorie</a></li>
            <li><a class="dropdown-item" href="{{ route('genre.create') }}">inserisci categoria</a></li>
          @guest
    {{-- Se l'utente NON è loggato, vede questi due link --}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
    </li>
@else
    <li class="nav-item">
        <a class="nav-link" href="{{ route('movie.create') }}">Inserisci Film</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('user.profile') }}">Il mio Profilo</a></li>
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
          @endauth
      
      
    </div>
  </div>
</nav>