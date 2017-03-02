<?php
/*
 * Formulario para dar de alta un entrenador en la BBDD
 */
require_once 'stukemonbbdd.php';

// Comprobamos si se ha pulsado botón "alta"
if (isset($_POST['alta'])) {
   // Recogemos los datos del post
   $nom = $_POST['nombre'];
   $pokeballs = $_POST['pokeballs'];
   $pociones = $_POST['pociones']; 
   // Llamamos a la función que guarda los datos en la bbdd
   insertarEntrenador($nom, $pokeballs, $pociones);
} else {
// Formulario de alta entrenador
    echo "<form action ='' method='POST'>";
    echo "Nombre: <input type='text' name='nombre' required><br>";
    echo "Nº de pokeballs: <input type='number' name='pokeballs' required><br>";
    echo "Nº de pociones: <input type='number' name='pociones' required><br>";
    echo "<input type='submit' name='alta' value='Alta'>";
    echo "</form>";
}
