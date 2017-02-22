<?php

if (isset($_POST["enviar"])) {
    // Recibimos los datos del formulario (POST)
    $nuevoJugador = $_POST["nuevoJugador"];
    $fecha = $_POST["fecha"];
    $ncanastas = $_POST["ncanastas"];
    $nassistencias = $_POST["nassistencias"];
    $nrebotes = $_POST["nrebotes"];
    $position = $_POST["position"];
    $equipo = $_POST["equipo"];

    // Necesitamos incluir el fichero bbdd.php
    require_once('bbdd.php');
    // Insertamos datos en la bbdd
    insertarNuevoJugador($nuevoJugador, $fecha, $ncanastas, $nassistencias, $nrebotes, $position, $equipo);
} else {
    echo ' 
        <form action = "" method = "POST">
        Nombre Nuevo Jugador: <input type = "text" name = "nuevoJugador" required><br>
        Fecha Nacimiento: <input type = "date" name = "fecha" required><br>
        Numero de Canastas: <input type = "number" name = "ncanastas" required><br>
        Numero de Assistencias: <input type = "number" name = "nassistencias" required><br>
        Numero de Rebotes: <input type = "number" name = "nrebotes" required><br>
        Posición Jugador: <input type = "text" name = "position" required><br>
        Equipo del Jugador: <input type = "text" name = "equipo" required><br>
        <input type = "submit" name = "enviar" value = "Alta"><br>
        </form>';
}
?>
