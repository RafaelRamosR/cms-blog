<?php require_once ROUTE_APP . '/views/inc/header.php'; ?>
<?php require_once ROUTE_APP . '/views/inc/menu.php'; ?>

<div class="container-fluid register-login">
  <div class="row wrapper">
    <div class="col-lg padding-none bg-image-container">
      <div class="container__image">
        <div class="image--points"></div>
      </div>
    </div>
    <div class="col-lg form-center d-flex justify-content-center align-items-center">
      <div class="container-form">
        <h1 class="register-login-h1">4BLOG</h1>
        <p class="register-login-p">¡Bienvenido!, por favor ingresa tus credenciales</p>

        <form action="<?php echo ROUTE_URL; ?>login/check_login/" method="POST" name="loginForm" id="loginForm">
          <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
          <div class="form-group">
            <input type="text" id="nickname" name="nickname" class="form-control" required>
            <label for="nickname" class="form-label">Usuario</label>
          </div>
          <div class="form-group margin--bottom">
            <input type="password" id="password" name="password" class="form-control" required>
            <label for="password" class="form-label">Contraseña</label>
          </div>
          <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <input class="form-check-input checked--form--input" type="checkbox" id="remember" value="">
              <label class="form-check-label order-2" for="remember">Recuérdame</label>
              <label class="label--ckecked order-1" for="remember"></label>
            </div>
            <a href="#" class="forgot__password--link">¿Olvidó su contraseña?</a>
          </div>
          <div class="d-flex justify-content-lg-center">
            <button type="submit" class="btn btn-login align-self-center" name="btn-login" id="btn-login">Entrar</button>
          </div>
        </form>

      </div>
    </div>

  </div>
</div>

<?php require_once ROUTE_APP . '/views/inc/footer.php'; ?>