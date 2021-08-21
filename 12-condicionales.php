<?php include 'includes/header.php';

$autenticado = false;
$admin = false;

if($autenticado && $admin) {
    echo 'Usuario autenticado correctamente';
}else{
    echo 'Usuario no autenticado, inicia sesión';
}

// If anidados... 
$cliente = [
    'nombre' => 'Nicolas',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];
echo '<br>';
if( !empty($cliente) ) {
    
    echo 'El arreglo de cliente no está vacío';
    echo '<br>';
    if($cliente['saldo'] > 0) {
        echo 'El cliente tiene saldo disponible';
    }else {
        echo 'No hay saldo';
    }
}
echo '<br>';
// Else if

if($cliente['saldo'] > 0) {
    echo 'El Cliente tiene saldo';
} else if($cliente['informacion']['tipo'] == 'premium') {
    echo 'El Cliente es Premium';
} else {
    echo 'No hay cliente definido o no hay saldo o no es Premium';
}


// Switch
echo '<br>';
$tecnologia = 'JavaScript';

switch($tecnologia) {
    case 'PHP': 
        echo 'PHP un excelente lenguaje';
        break;

    case 'JavaScript':
        echo 'Genial, el lenguaje de la Web';
        break;

    case 'HTML':
        echo 'Emmm...';
        break;
        
    default;
        echo 'Algun lenguaje que no se cual es';
}

include 'includes/footer.php';