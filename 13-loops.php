<?php include 'includes/header.php';

// While

// $i = 0; // Inicializador

// while($i < 10) {
//     echo $i . '<br>';

//     $i++; // Incremento
// }
echo '<br>';
// Do While
$i = 100;

do {
    echo $i . '<br>';
    $i++;
}while($i<10);

echo '<br>';

/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 imprimir FizzBuzz
 */

// For loop
// for($i = 0; $i < 100; $i++) {
//     if($i % 3 === 0 && $i % 5 === 0) {
//         echo $i . ' - FizzBuzz <br>';
//     }else if($i % 3 === 0) {
//         echo $i . ' - Fizz <br>';
//     }else if($i % 5 === 0) {
//         echo $i . ' - Buzz <br>';
//     }
// }


// For Each

$clientes = array('Pedro', 'Juan', 'Karen');

foreach( $clientes as $cliente ) {
    echo $cliente . '<br>';
}

for($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . '<br>';
}
 
include 'includes/footer.php';




