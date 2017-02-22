<?php

/*
 * Fichero que ejecutara la consola de listado alumnes
 * y mostrara el resultado por pantalla
 */

// Incluimos fichero de funciones de bbdd
require_once 'bbdd.php';

//Llamamos a la funcion que ejecuta la consulta
$resultado = selectAllAlumno();
//Mostramos resultado de la consulta por pantalla
echo "<h2> Listado de alumnos </h2>";
//Mientras la consulta tenga filas
while ($fila = mysqli_fetch_array($resultado)) {
    //Sacamos los datos de la fila
    extract($fila);
    //Los mostramos por pantalla
    //Los nombres de las variables seran SIEMPRE
    //iguales a los nombres de los campos en la BBDD
    echo "$nombre, $edad, $sexo, $ciudad, $telefono<br>";
}

//foreach ($resultado as $fila) {
//    foreach ($fila as $valor) {
//        echo "$valor";
//    }
//    echo "<br>";
//}