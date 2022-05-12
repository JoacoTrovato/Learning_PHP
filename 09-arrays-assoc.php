<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Joaquín",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "premium",
        "disponible" => 200
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// echo $cliente["nombre"]; // Para acceder a un valor
// echo $cliente["informacion"]["disponible"];

$cliente["codigo"] = 454823;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
