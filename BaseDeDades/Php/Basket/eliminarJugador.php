<?php

/* 
 * Eliminar jugador de la bbdd
 */

require_once 'bbdd.php';

//Formulario para que escoja el jugador
echo "<form action='eliminarPlayer.php' method='post'>";
echo "Seleciona el jugador a eliminar: ";
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