<?php

if (isset($_POST["enviar"])) {
    // Recibimos los datos del formulario (POST)
    $nuevoEquipo = $_POST["nuevoEquipo"];
    $city = $_POST["city"];
    $date = $_POST["date"];

    // Necesitamos incluir el fichero bbdd.php
    require_once('bbdd.php');
    // Insertamos datos en la bbdd
    insertarNuevoEquipo($nuevoEquipo, $city, $date);
} else {
    echo ' 
        <form action = "" method = "POST">
        Nuevo Equipo: <input type = "text" name = "nuevoEquipo" required><br>
        Ciudad: <input type = "text" name = "city" required><br>
        Data: <input type = "date" name = "date" required><br>
        <input type = "submit" name = "enviar" value = "Alta"><br>
        </form>';
}
?>
