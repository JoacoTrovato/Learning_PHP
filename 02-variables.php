<?php include 'includes/header.php';

// Las variables en php inician con un $

$nombre = "Joaquín";

$_nombre = "Joaquín";

$nombre = "Andrés"; // Se pueden reasignar las variables igual que un let en JavaScript

echo $nombre;

var_dump($nombre);

// Forma más común de crear constantes en php

define('constante', 'Este es el valor de la constante');
echo constante; // Se llama sin el $

const _constante = "Constante 2"; // Otra manera de crear constantes
echo _constante;

// Por convención las variables en php se pueden crear de las siguientes maneras

$nombreCliente = "Joaquín";
$nombre_cliente = "Joaquín";

include 'includes/footer.php';
