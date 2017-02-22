<?php

if (isset($_POST["enviar"])) {
    // Recibimos los datos del formulario (POST)
    $listadoCanastas = $_POST["listadoCanastas"];

    // Necesitamos incluir el fichero bbdd.php
    require_once('bbdd.php');
    // Insertamos datos en la bbdd
    insertarListadoCanastas($listadoCanastas);
} else {
    echo ' 
        <form action = "" method = "POST">
        Listado de jugadores que hayan conseguido un número mayor o igual a un número de canastas especificado por el usuario: <input type = "text" name = "listadoCanastas" required><br>
        <input type = "submit" name = "enviar" value = "Alta"><br>
        </form>';
}
?>