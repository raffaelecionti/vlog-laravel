  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home-page') }}">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home-page') }}">home</a>
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
      
      </ul>
      
    </div>
  </div>
</nav>