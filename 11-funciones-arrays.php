<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump( in_array('Tablet', $carrito));
var_dump( in_array('Audifonos', $carrito));

// Ordenar elementos de un arreglo

$numeros = array(1,3,4,5,1,2);

sort($numeros); // menor a mayor

rsort($numeros); // mayor a menor

echo '<pre>';
var_dump($numeros);
echo '</pre>';


// Ordenas arreglo asociativo

$cliente = array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Nicolas'
);

echo '<pre>';
var_dump($cliente);
echo '</pre>';

asort($cliente); // Ordena por valores (orden alfabetico)
arsort($cliente); // Ordena por valores (orden alfabetico, DE LA Z a la A)
ksort($cliente); // Ordena por llaves (orden alfabetico)
krsort($cliente); // Ordena por llaves (orden alfabetico, DE LA Z A LA A) 


echo '<pre>';
var_dump($numeros);
echo '</pre>';


include 'includes/footer.php';