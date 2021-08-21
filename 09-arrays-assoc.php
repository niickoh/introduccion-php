<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Nicolas',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];


echo '<pre>';
var_dump($cliente['nombre']);
echo '<pre>';

echo $cliente['nombre'];
echo $cliente['saldo'];
echo $cliente['informacion']['tipo'];

include 'includes/footer.php';