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
            <li><a class="dropdown-item" href="{{ route('movie.add') }}">inserisci un nuovo film</a></li>
          </ul>
           <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('movie.index') }}">tutti i  film</a></li>
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

          </ul>
          @endauth
        </li>
      
    </div>
  </div>
</nav>