<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <!--logotipo-->
    <a class="navbar-brand" href="/cms/home">
      <img src="<?php echo ROUTE_URL; ?>img/logo.png" alt="Logo Image">
    </a>
    <!--/logotipo-->
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-label="Toggle navigation">
      <ion-icon name="menu"></ion-icon>
    </button>
    <!-- /Collapse button -->
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/cms/registro">
            <ion-icon name="shield-checkmark-outline"></ion-icon> Registrarse
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cms/login">
            <ion-icon name="log-in-outline"></ion-icon> Iniciar sesión
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pointer" data-toggle="dropdown">
            <ion-icon name="home"></ion-icon>
            </ion-icon><span class="d-none d-xl-inline-block ml-1">Home</span>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/cms/home">Inicio</a>
            <a class="dropdown-item" href="/cms/categories">Categorias</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle pointer" data-toggle="dropdown">
            <ion-icon name="person"></ion-icon><span class="d-none d-xl-inline-block ml-1">User Name</span>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/cms/user/my-user">Ver perfil</a>
            <a class="dropdown-item" href="/cms/post/write/new">Redactar post</a>
            <a class="dropdown-item" href="/cms/home">Cerrar sesión</a>
          </div>
        </li>
      </ul>

      <form class="d-flex">
        <label class="sr-only" for="search">Username</label>
        <div class="input-group">
          <div class="input-group-prepend pointer">
            <div class="input-group-text">
              <ion-icon name="search"></ion-icon>
            </div>
          </div>
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </div>
      </form>
  </div>
  <!-- /Collapsible content -->
</nav>