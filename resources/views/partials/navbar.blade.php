<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Repaso  Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('apodoInicio')?'text-warning':''}}" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('apodoAlmacen')?'text-danger':''}}" aria-current="page" href="/">Almacen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('apodoAEditar')?'text-success':''}}" aria-current="page" href="/">Editar</a>
          </li>
        </ul>
      </div>
    </div>
</nav>