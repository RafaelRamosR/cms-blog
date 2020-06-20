<?php require_once ROUTE_APP . '/views/inc/header.php'; ?>
<?php require_once ROUTE_APP . '/views/inc/menu.php'; //foreach($data['users'] as $result): echo $result->email; endforeach; ?>

<div class="container-fluid register-login">
  <div class="row wrapper">
    <div class="col-lg padding-none bg-image-container">
      <div class="container__image">
        <div class="image--points"></div>
      </div>
    </div>
    <div class="col-lg form-center d-flex justify-content-center align-items-center">
      <div class="container-form">
        <h1 class="register-login-h1">Registro</h1>
        <p class="register-login-p">Por favor, ingrese sus datos para crear su cuenta</p>
        <form action="<?php echo ROUTE_URL; ?>registro/register/" method="POST" name="formRegister" id="formRegister" autocomplete="off">
          <div class="row">
            <div class="col-lg">
              <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" required>
                <label for="name" class="form-label">Nombre</label>
              </div>
            </div>

            <div class="col-lg">
              <div class="form-group">
                <input type="text" id="lastname" name="lastname" class="form-control" required>
                <label for="lastname" class="form-label">Apellido</label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <input type="text" id="nickname" name="nickname" class="form-control" required>
            <label for="nickname" class="form-label">Alias</label>
          </div>

          <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" required>
            <label for="email" class="form-label">E-mail</label>
          </div>

          <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" required>
            <label for="password" class="form-label">Contraseña</label>
          </div>

          <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center">
                <input class="form-check-input checked--form--input" type="checkbox" id="acepto" name="acepto" value="" required>
                <label class="form-check-label order-2" for="remember">Acepto los términos y condiciones</label>
                <label class="label--ckecked order-1" for="acepto"></label>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-lg-center">
            <button type="submit" name="btn-register" class="btn btn-signup--register align-self-center">Aceptar</button>
          </div>
          <a href="#" class="register-link--haveaccount">¿Ya tiene una contraseña? Entrar</a>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require_once ROUTE_APP . '/views/inc/footer.php'; ?>