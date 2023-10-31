<?php
// -------------- VARIABLES DINÁMICAS --------------
$numero = "Cambié mi valor";

$numero = 20;


// -------------- VARIABLES CONSTANTES --------------
const TEXTO = "Este es un texto en una constante";
define("TEXTO2", "Este es el segundo texto");


// -------------- CONCATENACIÓN --------------

"El número es: " . $numero;
"El valor de la variable número es: $numero";
'El valor de la variable número es: $numero';


// -------------- OPERADORES --------------

// ARITMÉTICOS + - * / % ** ++ --
$a = 3;
$a--;

// COMBINADOS .= += -= *= /= %=
$texto = "Hola me llamo ";
$texto .= "Mateus";

$b = 10;
$b %= 2;

// COMPARACIÓN == === != !== < > <= >=
$resultado = 10 !== "10";


// LÓGICOS &&(and) ||(or)
$resultado2 = false && true; // false
$resultado3 = false || false;
$resultado4 = $resultado2 && $resultado3;

// -------------- ESTRUCTURAS DE CONTROL --------------

// CONDICIONAL
if ($resultado2) {
    echo "Entró a la condicional";
} else {
    // echo "No entró";
}

// ITERATIVAS
$a = 0;
while ($a < 10) {
    // var_dump($a);
    $a++;
}

for ($i=0; $i < 5; $i++) { 
    // var_dump($i);
}


// -------------- ARRAYS --------------
// Arreglo indexado
$array = [10, 20, 30, 40, 50, 60, 70];


// Arreglo asociativo
$persona = [
    "nombre" => "Harold",
    "profesión" => "programador",
    "hobbies" => ["escuchar música", "jugar fútbol"]
];

// foreach
foreach ($persona as $key => $value) {
    // echo $key . "<br>";
    // if (is_array($value)) {
    //     echo $value[0];
    // } else {
    //     echo $value;
    // }
    // echo "<br>";
}


$carrito = [
    'producto1' => [
        'nombre' => 'Camiseta',
        'precio' => 20.00,
        'cantidad' => 2,
    ],
    'producto2' => [
        'nombre' => 'Zapatos',
        'precio' => 50.00,
        'cantidad' => 1,
    ],
    'producto3' => [
        'nombre' => 'Pantalones',
        'precio' => 30.00,
        'cantidad' => 3,
    ],
];

$nuevoElemento = [
    "producto4" => [
    'nombre' => 'Correa',
    'precio' => 15.00,
    'cantidad' => 1,
    ]
];

$carrito = $nuevoElemento + $carrito;

unset($carrito["producto2"]);



foreach ($carrito as $key => $producto) {
    echo "<h2>$key</h2>";
    foreach ($producto as $caracteristica => $valor) {
        echo "<p>$caracteristica: $valor</p>";
    }
}