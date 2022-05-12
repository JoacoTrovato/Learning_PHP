<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2); // False
echo "<br>";

var_dump($numero1 < $numero2); // True
echo "<br>";

var_dump($numero1 >= $numero2); // False
echo "<br>";

var_dump($numero1 <= $numero2); // True
echo "<br>";

var_dump($numero2 == $numero3); // True
echo "<br>";

var_dump($numero2 == $numero4); // True 30 == "30" igual que JavaScript
echo "<br>";

var_dump($numero2 === $numero4); // False 30 no es igual que "30" con el comparador ===
echo "<br>";

// Operador <=> si al comparar dos valores el de la izquierda es mayor devuelve (-1),
// si son iguales devuelve (0) y si el de la izquierda es mayor devuelve (1)

var_dump($numero1 <=> $numero2); // -1
echo "<br>";

var_dump($numero2 <=> $numero3); // 0
echo "<br>";

var_dump($numero2 <=> $numero1); // 1
echo "<br>";

include 'includes/footer.php';
