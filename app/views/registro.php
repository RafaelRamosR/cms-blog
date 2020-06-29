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
        <h1 class="register-login-h1">Registro</h1>
        <p class="register-login-p">Por favor, ingrese sus datos para crear su cuenta</p>
        <form action="<?php echo ROUTE_URL; ?>registro/register/" method="POST" name="formRegister" id="formRegister" autocomplete="off">
          <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">

          <div class="row">
            <div class="col-lg">
              <div class="form-group">
                <input type="text" id="name" name="name" class="form-control" required>
                <label for="name" class="form-label">Nombre</label>
                <div class="messages"></div>
              </div>
            </div>

            <div class="col-lg">
              <div class="form-group">
                <input type="text" id="lastname" name="lastname" class="form-control" required>
                <label for="lastname" class="form-label">Apellido</label>
                <div class="messages"></div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <input type="text" id="nickname" name="nickname" class="form-control" required>
            <label for="nickname" class="form-label">Alias</label>
            <div class="messages"></div>
          </div>

          <div class="form-group">
            <input type="email" id="email" name="email" class="form-control" required>
            <label for="email" class="form-label">E-mail</label>
            <div class="messages"></div>
          </div>

          <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" autocomplete="off" required>
            <label for="password" class="form-label">Contraseña</label>
            <div class="messages"></div>
          </div>

          <div class="d-flex justify-content-between">
            <div class="form-group align-items-center">
              <div class="d-flex align-items-center">
                <input class="form-check-input checked--form--input" type="checkbox" id="i-agree" name="i-agree" value="i-agree">
                <label class="form-check-label order-2" for="i-agree">Acepto los términos y condiciones</label>
                <label class="label--ckecked order-1" for="i-agree"></label>
              </div>
              <div class="messages"></div>
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
<script src="<?php echo ROUTE_URL; ?>js/form-validate.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script>
  const constraints = {
    name: {
      // You need to pick a name too
      presence: true,
      // And it must be between 3 and 20 characters long
      length: {
        minimum: 3,
        tooShort: "^Demasiado corto (mínimo 3 caracteres)",
        maximum: 50,
        tooLong: "^Demasiado largo (máximo 50 caracteres)"
      },
      format: {
        // We don't allow anything that a-Z
        pattern: "^[a-z|A-Z|ñáéíóú]*$",
        // but we don't care if the name is uppercase or lowercase
        flags: "i",
        message: "^Solo letras sin espacios"
      }
    },
    lastname: {
      presence: true,
      length: {
        minimum: 3,
        tooShort: "^Demasiado corto (mínimo 3 caracteres)",
        maximum: 50,
        tooLong: "^Demasiado largo (máximo 50 caracteres)"
      },
      format: {
        pattern: "^[a-z|A-Z|ñáéíóú]*$",
        flags: "i",
        message: "^Solo letras sin espacios"
      }
    },
    nickname: {
      presence: true,
      length: {
        minimum: 3,
        tooShort: "^Demasiado corto (mínimo 3 caracteres)",
        maximum: 20,
        tooLong: "^Demasiado largo (máximo 20 caracteres)"
      },
      format: {
        pattern: "[a-z0-9]+",
        flags: "i",
        message: "can only contain a-z and 0-9"
      }
    },
    email: {
      // Email is required
      presence: true,
      // and must be an email (duh)
      email: true
    },
    password: {
      // Password is also required
      presence: true,
      length: {
        minimum: 8,
        tooShort: "^Demasiado corto (mínimo 8 caracteres)",
        maximum: 50,
        tooLong: "^Demasiado largo (máximo 50 caracteres)"
      }
    },
    "i-agree": {
      // You also need to input where you live
      presence: {
        message: "^Debe aceptar los términos y condiciones."
      }
    }
  };
  formValidate(constraints);
</script>