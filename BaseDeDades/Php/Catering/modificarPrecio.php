<?php

/* 
 * Página que mostrará un select para modificar el precio de un plato
 * que hay en la bbdd
 */

// incluimos el fichero de la bbdd
require_once 'cateringbbdd.php';

// Comprobamos si se ha pulsado botón "modificar"
 if (isset($_POST['modificar'])) {
    $platos = $_POST['plato'];
    $precio = $_POST['precio'];
    $precioAntiguo = $_POST['precioAntiguo'];
    // Llamamos a la función que guarda los datos en la bbdd
    setPrecioPlatos($platos, $precio, $precioAntiguo);
} else{
    //Formulario seleccionar platos
    echo "<form action ='' method='POST'>";
    // Para indicar el plato al usuario debe escoger
    // de entre los platos de la bbdd
    // Creamos select para mostrar esos platos
    echo "Selecciona el plato, para modificar el precio: <select name='plato'>";
    // traemos los datos de la bbdd
    $platos = selectPlatos();
    while ($fila = mysqli_fetch_array($platos)) {
    extract($fila);
    echo "<option value='$idplato'>$nombre, $precio</option>";
    } 
    echo "</select>";
    echo "<input type='hidden' name='precioAntiguo' value='$precio' required><br>";
    echo "Precio: <input type='number' step='any' name='precio' required><br>";
    echo "<input type='submit' name='modificar' value='Modificar'>";
    echo "</form>";
}