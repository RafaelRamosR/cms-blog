<?php

require_once 'models/usuario.php';

class UsuarioController {
    public function registro(){
        require_once('./views/includes/header.php');
        require_once('./views/includes/footer.php');
    }

    public function guardarUsuario($datos)
    {
        $errores = '';
        if (!isset($datos['email'])){
            $errores = "<p>Falta el email</p>";
        }

        $usuario = new Usuario();
        $usuario->guardarUsuario($datos);
        session_destroy();
    }
}

?>