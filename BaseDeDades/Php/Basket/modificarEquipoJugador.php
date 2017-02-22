<?php

/*
 * Formulario para modificar los datos de un jugador
 */

require_once 'bbdd.php';

if (isset($_POST['modificar'])) {
    //Si han pulsado modificar
    //Recojo los datos del formulario por POST
    $nuevoJugador = $_POST["name"];
    $equipo = $_POST["team"];
    modificarJugador($nuevoJugador, $equipo);
} else {

//Recogemos del POST el nombre del jugador seleccionado
    $nuevoJugador = $_POST['player'];

//Traemos todos los datos del jugador de la bbdd
    $datos = selectEquipoByJugador($nuevoJugador);

//Solo tenemos una fila, ya que solo devuelve los datos de UN jugador
    $fila = mysqli_fetch_array($datos);
//Extraemos los datos
    extract($fila);
//Creamos el formulario y vamos rellenando los datos
    echo "<form action='' method='POST'>";
    echo "<h2>Datos del jugador $name</h2>";
    echo "<input type='hidden' name='name' value=$name><br>";
    echo "Equipo del Jugador: <input type='text' name='team' value=$team><br>";
    echo "<input type='submit' name='modificar' value='Modificar'>";
    echo "</form>";
}

