<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 2000,
        'disponible' => true
    ],
    [
        'nombre' => 'Television',
        'precio' => 3000,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 4000,
        'disponible' => false
    ]
];

foreach( $productos as $producto ) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?></p>
        <p>Precio: <?php echo $producto['precio']; ?></p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible';?></p>
    </li>

    <?php


}

include 'includes/footer.php';