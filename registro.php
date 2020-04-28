<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Registro</title>
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
                    <h1 class="register-login-h1">Registro</h1>
                    <p class="register-login-p">Por favor, ingrese sus datos para crear su cuenta</p>
                    <!-- inicio de formulario -->
                    <form>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                                    <label for="firstname" class="form-label">Nombre</label>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" class="form-control" required>
                                    <label for="username" class="form-label">Nick</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" required>
                                <label for="email" class="form-label">E-mail</label>
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" required>
                                <label for="password" class="form-label">Contraseña</label>
                            </div>
                            
                            <div class="form-group margin--bottom">
                                <input type="confirmPassword" name="confirmPassword" id="confirmPassword" class="form-control" required>
                                <label for="confirmPassword" class="form-label">Confirmar contraseña</label>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- start container -->
</body>
</html>