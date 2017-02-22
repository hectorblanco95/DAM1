<?php

/*
 * Fichero que mostrará listado de nombres de jugadores
 * para que el usuario escoja cual quiere modificar
 */


require_once 'bbdd.php';

//Formulario para que escoja el jugador
echo "<form action='modificarCanastas.php' method='post'>";
echo "Seleciona el jugador a modificar: ";
echo "<select name='player'>";
//Leemos los nombres de la bbdd
$nombres = selectNombreJugador();
//Vamos extrayendo los nombres y añadiendolos a la lista
while ($fila = mysqli_fetch_array($nombres)) {
    extract($fila);
    echo "<option value='$name'>$name</option>";
}
echo "</select>";
echo "<input type='submit' value='Selecciona'>";
echo "</form>";