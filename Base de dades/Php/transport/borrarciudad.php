<?php

/*
 * Página que permitirá escoger una ciudad y borrarla en la bbdd
 */

require_once 'transportbbdd.php';

// Si ha pulsado borrar
if (isset($_POST['borrar'])) {
    // Recogemos la variable del post (el codigo postal)
    $cp = $_POST['ciudad'];
    borrarCiudad($cp);
} else {
// Formulario que permite escoger ciudad al usuario
    echo "<form action='' method='POST'>";
    echo "Escoge la ciudad que quieras borrar: ";
    echo "<select name='ciudad'>";
// Traemos los datos de las ciudades
    $ciudades = selectAllCiudades();
    while ($fila = mysqli_fetch_array($ciudades)) {
        extract($fila);
        // Mostramos el código postal y el nombre al usuario
        // Pero como valor NECESITAMOS guardar el
        // código postal que es lo que lo identifica en la bbdd
        echo "<option value='$postalcode'>$postalcode $name";
        echo "</option>";
    }
    echo "</select>";
    echo "<input type='submit' name='borrar' value='Borrar'>";
    echo "</form>";
}




