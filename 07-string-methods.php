<?php include 'includes/header.php';


$nombre_cliente = 'Nicolas';

// conocer la extension de un string
echo strlen($nombre_cliente);
// Eliminar espacios en blanco

$texto = trim($nombre_cliente);
echo strlen($texto);

// Convertilo a mayusculas
echo strtoupper($nombre_cliente);

// Convertilo en minusculas
echo strtolower($nombre_cliente);

$mail = 'correo@correo.com';
$mail2 = 'Correo@correo.com';

// Revisar si un string existe o no
echo strpos($nombre_cliente, 's');


$tipo_cliente = 'premiun';

echo '<br>';
echo 'El Cliente ' . $nombre_cliente . ' es ' . $tipo_cliente;

echo "El Cliente {$nombre_cliente} es {$tipo_cliente}";

include 'includes/footer.php';

