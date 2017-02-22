<?php

/* 
 * Fichero donde escribiremos las funciones que necesitamos
 * para los cálculos del ejercicio
 */

// Función que recibe un array de números y devuelve la suma 
// de sus valores
function sumaArray($array) {
    $suma = 0;
    foreach ($array as $numero) {
        $suma += $numero;           // $suma = $suma + $numero
    }
    return $suma;
}

// Función que recibe un array y devuelve la media de sus valores
function mediaArray($array) {
    return sumaArray($array) / count($array);
}

// Función que devuelve cuantos números pares hay en un array
// que recibe como parámetro
function contarParesArray($array) {
    $contador = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $contador++;
        }
    }
    return $contador;
}





