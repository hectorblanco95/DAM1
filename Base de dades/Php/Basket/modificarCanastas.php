<?php

/*
 * Formulario para modificar los datos de un jugador
 */

require_once 'bbdd.php';

if (isset($_POST['modificar'])) {
    //Si han pulsado modificar
    //Recojo los datos del formulario por POST
    $nuevoJugador = $_POST["name"];
    $fecha = $_POST["birth"];
    $ncanastas = $_POST["nbaskets"];
    $nassistencias = $_POST["nassists"];
    $nrebotes = $_POST["nrebounds"];
    $position = $_POST["position"];
    modificarJugador($nuevoJugador, $fecha, $ncanastas, $nassistencias, $nrebotes, $position);
} else {

//Recogemos del POST el nombre del jugador seleccionado
    $nuevoJugador = $_POST['player'];

//Traemos todos los datos del jugador de la bbdd
    $datos = selectJugadorByNombre($nuevoJugador);

//Solo tenemos una fila, ya que solo devuelve los datos de UN jugador
    $fila = mysqli_fetch_array($datos);
//Extraemos los datos
    extract($fila);
//Creamos el formulario y vamos rellenando los datos
    echo "<form action='' method='POST'>";
    echo "<h2>Datos del jugador $name</h2>";
    echo "<input type='hidden' name='name' value=$name><br>";
    echo "Fecha Nacimiento: <input type='date' name='birth' value=$birth><br>";
    echo "Numero de Canastas: <input type='number' name='nbaskets' value=$nbaskets><br>";
    echo "Numero de Assistencias: <input type='number' name='nassists' value=$nassists><br>";
    echo "Numero de Rebotes: <input type='number' name='nrebounds' value=$nrebounds><br>";
    echo "Posición Jugador: <input type='text' name='position' value=$position><br>";
    echo "<input type='submit' name='modificar' value='Modificar'>";
    echo "</form>";
}

