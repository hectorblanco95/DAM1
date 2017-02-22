<?php
/*
 * Formulario para dar de alta una ciudad en la BBDD
 */
require_once 'transportbbdd.php';

// Comprobamos si se ha pulsado botón "alta"
if (isset($_POST['alta'])) {
   // Recogemos los datos del post
   $codip = $_POST['cp'];
   $nom = $_POST['nombre'];
   // Llamamos a la función que guarda los datos en la bbdd
   insertarCiudad($codip, $nom);
} else {
// Formulario de alta ciudad
    echo "<form action ='' method='POST'>";
    echo "Codigo postal: <input type='text' name='cp'>";
    echo "Nombre: <input type='text' name='nombre'>";
    echo "<input type='submit' name='alta' value='Alta'>";
    echo "</form>";
}
