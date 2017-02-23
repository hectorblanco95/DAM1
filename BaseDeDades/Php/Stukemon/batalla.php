<?php

/* 
 * Página donde se ejecutara la batalla.
 */

// incluimos el fichero de la bbdd
require_once 'stukemonbbdd.php';

// Comprobamos si se ha pulsado botón "alta"
if (isset($_POST['batalla'])) {
   // Recogemos los datos del post
   $name = $_POST['trainer'];
   $name2 = $_POST['trainer2'];
    if ($name==$name2){
        
    }
} else {
    //Formulario batalla
    echo "<form action ='' method='POST'>";
    // Para indicar el entrenador el usuario debe escoger
    // de entre los entrenadores que tienen pokemons en la bbdd
    // Creamos select para mostrar esos entrenadores
    echo "Selecciona los entrenadores para la batalla: <select name='trainer'>";
    // traemos los datos de la bbdd
    $trainers = selectTrainers();
   while ($fila = mysqli_fetch_array($trainers)) {
      extract($fila);
        echo "<option value='$trainer'>$trainer</option>";
  } 
   echo "</select>";
  echo "<select name='trainer2'>";
  $trainers = selectTrainers();
  while ($fila = mysqli_fetch_array($trainers)) {
      extract($fila);
        echo "<option value='$trainer'>$trainer</option>";
  }
    echo "</select> ";
    echo "<input type='submit' name='batalla' value='Batalla'>";
    echo "</form>";
}