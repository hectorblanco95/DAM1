<?php

/* 
 * Fichero que recoge los números y muestra la suma, media y cantidad de pares.
 */

// Maneras de incluir un fichero: include, include_once, require, require_once
require_once 'calculos.php';

// Recogemos el array de números del POST
$array = $_POST["numeros"];
// Calculamos la suma de los números del array
$resultadoSuma = sumaArray($array);
// Mostramos el resultado por pantalla
echo "La suma de los números es: $resultadoSuma<br>";
// Calculamos la media
$resultadoMedia = mediaArray($array);
// La mostramos por pantalla
echo "La media de los números es: $resultadoMedia<br>";
// Contamos cuantos pares hay
$pares = contarParesArray($array);
// Sacamos el resultado por pantalla
echo "Hay $pares números pares<br>";

// Como lo mostraríamos
//foreach ($array as $num) {
//    echo "$num<br>";
//}
//
//
// Otra manera de mostrarlo
//for ($i=0; $i<count($array); $i++) {
//    echo $array[$i]."<br>";
//}
