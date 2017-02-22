<?php

/*
 * Formulario para dar de alta un camión
 */

require_once 'transportbbdd.php';
if (isset($_POST['alta'])) {
    // Recogemos las variables del POST
    $mat = $_POST['matricula'];
    $mod = $_POST['modelo'];
    $cap = $_POST['capacidad'];
    $cond = $_POST['conductor'];
    insertarCamion($mat, $mod, $cap, $cond);
} else {
    echo "<form action='' method='POST'>";
    echo "Matricula: <input type='text' name='matricula'><br>";
    echo "Modelo: <input type='text' name='modelo'><br>";
    echo "Capacidad: <input type='number' name='capacidad'><br>";
// Para indicar el conductor el usuario debe escoger
// de entre los conductores que estén en la bbdd
// Creamos select para mostrar esos conductores
    echo "Selecciona el conductor: <select name='conductor'>";
// traemos los datos de la bbdd
    $conductores = selectDniAndNameConductores();
    while ($fila = mysqli_fetch_array($conductores)) {
        extract($fila);
        echo "<option value='$dni'>$dni - $name</option>";
    }
    echo "</select><br>";
    echo "<input type='submit' value='Alta' name='alta'>";
    echo "</form>";
}