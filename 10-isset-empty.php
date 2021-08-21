<?php include 'includes/header.php';

$clientes = [];
$cliente2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');

// Empty =  revisa si un arreglo está vacío

var_dump( empty($clientes) );
var_dump( empty($clientes2) );
var_dump( empty($clientes3) );

// Isset - Revisar si un arreglo esta creado o una propiedad esta definida

var_dump( isset($clientes4) );
var_dump( isset($clientes1) );
var_dump( isset($clientes1['nombre']) );
var_dump( isset($clientes2) );
var_dump( isset($clientes3) );


include 'includes/footer.php';