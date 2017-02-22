<?php

/*
 * Página que muestra los datos de la ciudad seleccionada
 * en modificarciudad1 y permite modificarlos en la bbdd
 */

require_once 'transportbbdd.php';
if (isset($_POST['modificar'])) {
    // Recogemos del POST
    $cpactual = $_POST['cpactual'];
    $cpnuevo = $_POST['cpnuevo'];
    $nombre = $_POST['nombre'];
    // Llamamos a la función que modifica los datos en la bbdd
    modificarCiudad($cpactual, $cpnuevo, $nombre);
} else {
// Recogemos la ciudad seleccionada del post (código postal)
    $cp = $_POST['ciudad'];
// Cargamos los datos de la ciudad seleccionada de la bbdd
    $datos = selectCiudadbyCodigoPostal($cp);
    $fila = mysqli_fetch_array($datos);
    extract($fila);
    echo "<form action='' method='POST'>";
// Campo oculto para guardar el cp actual
    echo "<input type='hidden' name='cpactual' value='$postalcode'>";
    echo "Codigo postal: <input type='text' name='cpnuevo'
         value='$postalcode'>";
    echo "Nombre: <input type='text' name='nombre' value='$name'>";
    echo "<input type='submit' value='Modificar' name='modificar'>";
    echo "</form>";
}


