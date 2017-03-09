<?php

/* 
 * Página que permite dar de alta un pokemon en la bbdd
 */

require_once 'cateringbbdd.php';

// Comprobamos si se ha pulsado botón "alta"
if (isset($_POST['alta'])) {
   // Recogemos los datos del post
   $nif = $_POST['cliente'];
   $idplato = $_POST['plato'];
   $cantidad = $_POST['cantidad'];
   // Llamamos a la función que guarda los datos en la bbdd
   insertarPedido($nif, $idplato, $cantidad);
} else {
    // Formulario de alta pedido
    echo "<form action ='' method='POST'>";
    // Para indicar el cliente el usuario debe escoger
    // de entre los clientes que estén en la bbdd
    // Creamos select para mostrar esos clientes
    echo "Selecciona el cliente: <select name='cliente'>";
    // traemos los datos de la bbdd
    $clientes = selectClientes();
   while ($fila = mysqli_fetch_array($clientes)) {
      extract($fila);
        echo "<option value='$nif'>$nombre, $apellidos</option>";
  }
    echo "</select><br>";
    
    // Para indicar los platos el usuario debe escoger
    // de entre los platos que estén en la bbdd
    // Creamos select para mostrar esos platos
    echo "Selecciona el plato: <select name='plato'>";
    // traemos los datos de la bbdd
    $platos = selectPlatos();
   while ($fila = mysqli_fetch_array($platos)) {
      extract($fila);
        echo "<option value='$idplato'>$nombre</option>";
  }
    echo "</select><br>";
    echo "Cantidad: <input type='number' name='cantidad' required><br>";
    echo "<input type='submit' name='alta' value='Alta'>";
    echo "</form>";
}