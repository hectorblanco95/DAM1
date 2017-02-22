<?php

/*
 * Fichero que mostrará listado de nombres de alumnos
 * para que el usuario escoja cual quiere modificar
 */


require_once 'bbdd.php';

//Formulario para que escoja el alumno
echo "<form action='modificar.php' method='post'>";
echo "Seleciona el alumno a modificar: ";
echo "<select name='alumno'>";
//Leemos los nombres de la bbdd
$nombres = selectNombresAlumnos();
//Vamos extrayendo los nombres y añadiendolos a la lista
while ($fila = mysqli_fetch_array($nombres)) {
    extract($fila);
    echo "<option value='$nombre'>$nombre</option>";
}
echo "</select>";
echo "<input type='submit' value='Selecciona'>";
echo "</form>";
