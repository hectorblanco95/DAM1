<?php

/* 
 * Página que permite dar de alta un conductor en la bbdd
 */

require_once 'transportbbdd.php';

// Comprobamos si se ha pulsado botón "alta"
if (isset($_POST['alta'])) {
   // Recogemos los datos del post
   $dni = $_POST['dni'];
   $nom = $_POST['nombre'];
   $tfno = $_POST['tfno'];
   $sueldo = $_POST['sueldo'];
   // Llamamos a la función que guarda los datos en la bbdd
   insertarConductor($dni, $nom, $tfno, $sueldo);
} else {
// Formulario de alta conductor
    echo "<form action ='' method='POST'>";
    echo "DNI: <input type='text' name='dni'><br>";
    echo "Nombre: <input type='text' name='nombre'><br>";
    echo "Telefono: <input type='text' name='tfno'><br>";
    echo "Sueldo: <input type='number' name='sueldo'><br>";
    echo "<input type='submit' name='alta' value='Alta'><br>";
    echo "</form>";
}