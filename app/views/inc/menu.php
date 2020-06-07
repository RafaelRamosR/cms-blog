<header>
  <div class="container-fluid position-relative no-side-padding">

    <a href="/cms/home" class="logo"><img src="<?php echo ROUTE_URL; ?>img/logo.png" alt="Logo Image"></a>

    <div class="menu-nav-icon" data-nav-menu="#mainMenu"><ion-icon name="menu"></ion-icon></div>

    <ul class="main-menu visible-on-click" id="mainMenu">
      <li><a href="/cms/home"><ion-icon name="home"></ion-icon> Home</a></li>
      <li><a href="/cms/categories"><ion-icon name="pricetag"></ion-icon> Categorias</a></li>
      <li><a href="/cms/user"><ion-icon name="person"></ion-icon> Mi perfil</a></li>
      <li><a href="/cms/post/write/new"><ion-icon name="reader"></ion-icon> Nuevo post</a></li>
    </ul><!-- main-menu -->

    <div class="src-area">
      <form>
        <button class="src-btn" type="submit">
          <ion-icon name="search-outline"></ion-icon>
        </button>
        <input class="src-input" type="text" placeholder="Type of search">
      </form>
    </div>

  </div><!-- conatiner -->
</header>