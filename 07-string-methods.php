<?php include 'includes/header.php';

$nombreCliente = "Joaquín Trovato";

// Conocer la extensión de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

// Convertirlo a mayúsculas
echo strtoupper($nombreCliente);

// Convertirlo en minúsculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump($mail1 === $mail2); // False
var_dump(strtolower($mail1) === strtolower($mail2)); // True

// Reemplazar una parte de una variable por otra
echo str_replace("Joaquín", "J", $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente, "Joaquín"); // Si existe devuelve la posición y si no existe no devuelve nada

// Concatenar
$tipoCliente = "Premium";

echo "<br>";

echo "El Cliente " . $nombreCliente . " es " . $tipoCliente; // El Cliente Joaquín Trovato es Premium

echo "El Cliente {$nombreCliente} es {$tipoCliente}"; // El Cliente Joaquín Trovato es Premium

include 'includes/footer.php';
