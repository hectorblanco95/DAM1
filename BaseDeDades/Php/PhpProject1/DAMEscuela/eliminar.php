<?php

/* 
 * Eliminar los datos de un alumno
 */

require_once 'bbdd.php';

$nombre=$_POST['alumno'];
borrarAlumno($nombre);