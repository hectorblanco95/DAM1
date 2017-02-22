<?php

/*
 * Fichero que ejecutara la consola de listado jugadores
 * y mostrara el resultado por pantalla
 */

// Incluimos fichero de funciones de bbdd
require_once 'bbdd.php';

//Formulario para que escoja el equipo
echo "<form action='listadoJugadorByEquipo' method='post'>";
echo "Seleciona el equipo a mostrar: ";
echo "<select team='player'>";
//Llamamos a la funcion que ejecuta la consulta
$resultado = selectNombreEquipos();
//Mostramos resultado de la consulta por pantalla
echo "<h2> Listado del equipo $team </h2>";
//Mientras la consulta tenga filas
while ($fila = mysqli_fetch_array($resultado)) {
    //Sacamos los datos de la fila
    extract($fila);
    echo "<option value='$team'>$team</option>";
}
echo "</select>";
echo "<input type='submit' value='Selecciona'>";
echo "</form>";
