<?php include 'includes/header.php';

function usuarioAutenticado() : string {
    return 'El usuario está autenticado';
}

$usuario = usuarioAutenticado();

echo $usuario;



include 'includes/footer.php';