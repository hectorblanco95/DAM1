<?php

/*
 * Página que permitirá escoger una cocinero y borrarla en la bbdd
 */

require_once 'cateringbbdd.php';

// Si ha pulsado borrar
if (isset($_POST['borrar'])) {
    // Recogemos la variable del post
    $cocinero = $_POST['cocinero'];
    borrarCocinero($cocinero);
} else {
// Formulario que permite escoger cocinero al usuario
    echo "<form action='' method='POST'>";
    echo "Escoge el cocinero que quieras borrar: ";
    echo "<select name='cocinero'>";
// Traemos los datos de los cocineros
    $cocineros = selectAllCocineros();
    while ($fila = mysqli_fetch_array($cocineros)) {
        extract($fila);
        // Mostramos el nombre y el apellido al usuario
        // Pero como valor NECESITAMOS guardar el
        // dni que es lo que lo identifica en la bbdd
        echo "<option value='$dni'>$nombre $apellidos";
        echo "</option>";
    }
    echo "</select>";
    echo "<input type='submit' name='borrar' value='Borrar'>";
    echo "</form>";
}




