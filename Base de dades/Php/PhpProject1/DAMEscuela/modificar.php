<?php

/*
 * Formulario para modificar los datos de un alumno
 */

require_once 'bbdd.php';

if (isset($_POST['modificar'])) {
    //Si han pulsado modificar
    //Recojo los datos del formulario por POST
    $nom = $_POST['nombre'];
    $edad = $_POST['edad'];
    $city = $_POST['ciudad'];
    $tfno = $_POST['telefono'];
    $sex = $_POST['sexo'];
    modificarAlumnos($nom, $edad, $city, $tfno, $sex);
} else {

//Recogemos del POST el nombre del alumno seleccionado
    $nombre = $_POST['alumno'];

//Traemos todos los datos del alumno de la bbdd
    $datos = selectAlumnoByNombre($nombre);

//Solo tenemos una fila, ya que solo devuelve los datos de UN alumno
    $fila = mysqli_fetch_array($datos);
//Extraemos los datos
    extract($fila);
//Creamos el formulario y vamos rellenando los datos
    echo "<form action='' method='POST'>";
    echo "<h2>Datos del alumno $nombre</h2>";
    echo "<input type='hidden' name='nombre' value=$nombre><br>";
    echo "Edad: <input type='number' name='edad' value=$edad><br>";
    echo "Ciudad: <input type='text' name='ciudad' value=$ciudad><br>";
    echo "Teléfono: <input type='text' name='telefono' value=$telefono><br>";
    echo "Sexo: <input type='text' name='sexo' value=$sexo><br>";
    echo "<input type='submit' name='modificar' value='Modificar'>";
    echo "</form>";
}