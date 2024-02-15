<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Presto.it</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Accedi</a>
        </li>
            @else
            <div class="d-flex">
              <li class="nav-item">
                <a class="nav-link" href="">Benvenuto: <i class="bi bi-person-fill fs-6"></i>{{Auth::user()->name}}</a>
              </li>
              <a class="nav-link active" aria-current="page" href="{{route('announcement.create')}}">Inserisci annuncio</a>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-danger">Esci
                  <i class="bi bi-box-arrow-right"></i>
                </button>
              </form>
            </div>
        @endguest
       
      </ul>
    </div>
  </div>
</nav>