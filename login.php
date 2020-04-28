<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid register-login">
        <div class="row wrapper">
            <div class="col-lg padding-none bg-image-container">
                <div class="container__image">
                    <div class="image--points"></div>
                </div>
            </div>
            <div class="col-lg form-center d-flex justify-content-center align-items-center">
                <div class="container-form">
                    <h1 class="register-login-h1">Acceso</h1>
                    <p class="register-login-p">¡Bienvenido, por favor ingresa tus credenciales!</p>
                    <!-- inicio de formulario -->
                    <form>
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" required>
                            <label for="username" class="form-label">Usuario</label>
                        </div>
                        <div class="form-group margin--bottom">
                            <input type="password" name="password" id="password" class="form-control" required>
                            <label for="password" class="form-label">Contraseña</label>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" name="remenber" id="remenber" value="" class="form-check-input checked--form--input">
                                <label for="remenber" class="label--check-label order-2">Recuérdame</label>
                                <label for="remenber" class="label--checked order-1"></label>
                            </div>
                            <a href="http://" target="_blank" rel="noopener noreferrer" class="forgot__password--link">¿Olvidó su contraseña?</a>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-login align-self-center">Entrar</button>
                            <button type="button" class="btn btn-signup align-self-center">Secondary</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- start container -->
</body>
</html>