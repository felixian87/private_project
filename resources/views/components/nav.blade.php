<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <img src="img/logoNoText.png" width="50" alt="" href="#">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('welcome')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{route('profile')}}">Benvenuto {{Auth::user()->name}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('articleNew')}}">Inserisci articolo</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('articleIndex')}}">I tuoi articoli</a>
        </li>
        <a class="nav-link" href="{{ route('logout') }}" 
          onclick="event.preventDefault(); 
              document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
              @csrf
            </form>
        @endauth
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>