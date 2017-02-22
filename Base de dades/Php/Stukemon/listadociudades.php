<?php

/* 
 * Página que mostrará todos los datos de todas las ciudades
 * que hay en la bbdd
 */

// incluimos el fichero de la bbdd
require_once 'transportbbdd.php';

// Llamamos al método que devuelve todos los datos de las ciudades
$ciudades = selectAllCiudades();
// Mostramos título del listado
echo "<h2>Listado de ciudades</h2>";
// Mientras haya datos, leemos la fila y la mostramos
while ($fila = mysqli_fetch_array($ciudades)) {
    extract($fila);
    // SIEMPRE después de un extract, las variables
    // tienen el nombre de los campos de la bbdd
    echo "$postalcode $name <br>";
}

// Otra forma de hacerlo - Forma Víctor
//while ($fila = mysqli_fetch_array($ciudades)) {
//    echo $fila['postalcode']." ".$fila['name'];
//}



